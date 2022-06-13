@extends('layout.base')
@section('banner')
@endsection
@section('content')
    <div class="container pt-md-5 mb-5 pb-5">
        <h2 class="h2__underline" tabindex="0">Profile</h2>
        <h3 tabindex="0" class="mb-4">User Details</h3>
        <div style="max-width:400px;">
            <div class="mb-3">
                <label for="formFile" class="form-label mb-3">Logo(Max Image Size : 1.5MB. Required Format :
                    png/jpg/jpeg)</label>
                <div class="image-upload">
                    <div class="dplay-tbl">
                        @php
                        if (strpos($auth_user->image_name, "http") === 0){
                            $profile_image = $auth_user->image_name;
                        }
                        else{
                            if(!is_null($auth_user->image_name)){
                                $profile_image =  url('storage/images/'.$auth_user->image_name);
                            }
                            else{
                                $profile_image = "media/default_profile_picture.png";
                            }
                        }
                        @endphp
                        <div class="dplay-tbl-cell" style="max-width: 202px; position: relative;">
                            <img id="userImage" class="max-h-200x rounded-circle mx-auto uploaded-image user image_name"
                                alt="profile-image" src="{{ $profile_image }}"> 
                            <button class="btn btn--primary btn--small" type="submit">
                                <input data-action="user-image-action" type="file" class="ajax-img-upload" name="image_name">
                                Add Profile Picture</button>
                        </div>
                    </div>
                  
                </div>
            </div>

            <form class="ajax-form tab-form active" id="user-info" method="post">
                @csrf
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control mb-4" id="exampleFormControlInput1"
                    value="{{ Auth::user()->email }}" placeholder="name@example.com" disabled>
                <label for="exampleFormControlInput2" class="form-label">Username</label>
                <input type="text" class="form-control mb-4" id="exampleFormControlInput2" name="username"
                    value="{{ Auth::user()->username }}" placeholder="name@example.com">
                <p class="text-danger"></p>
                <div class="mb-5">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="inlineCheckbox1" name="gender" value="1"
                            {{ Auth::user()->gender == '1' ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineCheckbox1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="inlineCheckbox2" name="gender" value="2"
                            {{ Auth::user()->gender == '2' ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineCheckbox2">Female</label>
                    </div>
                    <p class="text-danger gender-error"></p>
                </div>
                <button class="btn btn--primary btn--small" type="submit">Update</button>
            </form>
        </div>
    </div>
    <x-tags :tags="$tags" />
    <x-genres :genres="$genres" />
@endsection

@push('scripts')
    <script type="text/javascript">
        $("#user-info").submit(function(event) {
            event.preventDefault();
            let formData = $(this).serialize();
            $.ajax({
                url: "{{ route('update_profile')}}",
                method: 'POST',
                data: formData,
                beforeSend: function() {

                },
                error: function(err) {
                    let user = err.responseJSON.errors;
                    if (user.username) {
                        $("[name='username']").next('p').text(user.username);
                    }
                    if (user.gender) {
                        $(".gender-error").next('p').text(user.gender);
                    }
                },
                success: function(response) {
                    Toast.fire({
                        icon: 'success',
                        title: response.message
                    });
                },
            });
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

var storage_url =  "{{url('storage')}}";
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
                $("#userImage").attr('src', storage_url+"/images/" + uploadedObj.profile_image);
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

    </script>
@endpush
