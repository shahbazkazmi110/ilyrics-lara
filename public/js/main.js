$(document).on('ready', function () {
    $(".navbar-toggler").click(function () {
        $('body').toggleClass('menuopened');
    });

});
addthis.user.ready(function (data) {
    addthis.button('.share', [addthis_config], [{ ui_click: true, ui_disable: true }]);
});

$('.viewmore_link').click(function () {
    $('#tags .less').fadeToggle();
    $(this).text($(this).text() == 'Show More' ? 'Show Less' : 'Show More');
});

var toastElList = [].slice.call(document.querySelectorAll('.toast'));
var toastList = toastElList.map(function (toastEl) {
    return new bootstrap.Toast(toastEl, { animation: true, autohide: true, delay: 500 });
});


$(document).on('change', '.ajax-img-upload', function (e) {
    e.preventDefault();
    e.stopPropagation();

    var $this = $(this),
        _URL = window.URL || window.webkitURL,
        file = $this[0].files[0];

    if ($this[0].files && file) {

        uploadImageAjax($this, file);
    }

    $this.val('');
});


function uploadImageAjax($this, file) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var action = $this.data('action'),
        id = $this.closest('form').find('[name="id"]').val(),
        form_data = new FormData();

    if (imageValidation(file)) {
        form_data.append('image_name', file);
        form_data.append('id', id);
        form_data.append('action', action);

        $.ajax({
            url: "image_upload",
            method: 'POST',
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,

            beforeSend: function () {
                // $('.ajax-bar').addClass('active').css('width', '0px');
            },

            error: function (err) {
                console.log(err);
            },

            success: function (response) {
                let uploadedObj = JSON.parse(JSON.stringify(response));
                $("#userImage").attr('src', "/storage/images/" + uploadedObj.profile_image);
                Toast.fire({ icon: 'success', title: "Image uploaded" });
            },
            // xhr: function () {
            //     var xhr = $.ajaxSettings.xhr();
            //     if (xhr.upload) {
            //         xhr.upload.addEventListener('progress', function (event) {
            //             var percent = 0;
            //             var position = event.loaded || event.position;
            //             var total = event.total;
            //             if (event.lengthComputable) {

            //                 percent = Math.ceil(position / total * 100);
            //                 $('.ajax-bar').css('width', percent + '%');
            //             }
            //         }, true);
            //     }
            //     return xhr;
            // },
            mimeType: "multipart/form-data"
        });
    }
}


function imageValidation(file) {
    var validFormat = ['image/png', 'image/jpg', 'image/jpeg'],
        fileType = file.type,
        fileSize = file.size,
        fileName = file.name;

    if ($.inArray(fileType, validFormat) < 0)
        Toast.fire({ icon: 'error', title: "upload jpeg, jpg or png format only" });
    else if (15000000 < fileSize)
        Toast.fire({ icon: 'error', title: "Max Image Size : 1.5MB" });
    else return true;
}

