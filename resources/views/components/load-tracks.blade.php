<div id="pagination-data">
{{-- @dd() --}}
@foreach ($tracks['data'] as $track)
    <x-load-track :track="$track"/>
@endforeach  
</div>
@push('pagination')
<script type="text/javascript">
	var page = 1;
    var lastpage = false;
    var Loading = false;

    $(window).scroll(function() {
        var hT = $('.ajax-load').offset().top,
            hH = $('.ajax-load').outerHeight(),
            wH = $(window).height(),
            wS = $(this).scrollTop();
        if (wS > (hT+hH-wH)){
            if(!lastpage && !Loading){
                page++;
	            loadMoreData(page);
            }

        }
    });

    $('.loader').hide();
    $('.no-record').hide();

  function renderTracks(track_data){
    var html = ''; 
    var pageurl = '{{ env('BASE_URL') }}' ;
    const auth_user =  '{{ Auth::user()? true : false }}';
    const login_route = '{{ route('login') }}';
    $.each(track_data, function (key, value) {  
      var image = pageurl+'/admin/uploads/'+value.image_name ;
      var php_handler = "{{ env('BASE_URL').'/html/inc/php/publisher.php' }}";
      var audio =   pageurl +'/admin/uploads/audio/'+ value.track_name; 
      html += `<div id="ag2" class="audiogallery skin-wave auto-init" style="opacity:0; margin-top:30px;" data-options='{"cueFirstMedia": "on","autoplay": "off","autoplayNext": "on","design_menu_position": "bottom","enable_easing": "on","playlistTransition": "fade","design_menu_height": "200"}'>
        <div class="items">
          <div class="audioplayer-tobe skin-wave button-aspect-noir" data-thumb="${image}"
              data-type="audio"
              data-source="${audio}"
              data-options='{
              "settings_php_handler": "/ilyrics-lara/public/audioplayer/inc/php/publisher.php",
              "skinwave_comments_enable": "on",
              "skinwave_comments_retrievefromajax": "on",
              "pcm_data_try_to_generate": "on",
              "pcm_data_try_to_generate_wait_for_real_pcm": "on",
              "skinwave_wave_mode_canvas_waves_number": 3,
              "skinwave_wave_mode_canvas_waves_padding": 1,
              "skinwave_wave_mode_canvas_reflection_size": 0.25,
              "design_color_bg": "444444",
              "design_color_highlight": "aa4444"
              }'
              >
              <div class="meta-artist">
                <a href="/reciter/${ value.artist_id }"><span class="the-artist">${value.track_artists}</span></a>
                <a href="/track/${ value.id }"><span class="the-name">${value.title}</span></a>
            </div>
          </div>
        </div>
      </div>`;
      html +=`<div class="border-bottom mb-2 pb-2 text-md-end text-center pt-2 pt-md-0">`;
      if(auth_user == '1'){
        html +=  `<a href="#" class="btn btn-sharing toggle-favourite" type="button" data-track-id="${value.id}" data-is-fav="${value.favourite}" >${ value.favourite == 2 ? 'Add Favourite' : 'Remove Favourite'}</a>
          <a href="#" class="btn btn-sharing add-playlist" type="button" data-image-name="${value.image_name }" data-track-id="${value.id}" data-bs-toggle="modal" data-bs-target="#addPlaylistModal" >Add to Playlist</a>
          <a href="${audio}" class="btn btn-sharing" target="_blank" type="button">Download</a>
          <a href="#" class="btn btn-sharing" type="button">Share</a>`;
      }else{
        html +=  `<a href="${login_route}" class="btn btn-sharing" type="button">Add Favourite</a>
          <a href="${login_route}" class="btn btn-sharing" type="button">Add to Playlist</a>
          <a href="${login_route}" class="btn btn-sharing" type="button">Download</a>
          <a href="${login_route}" class="btn btn-sharing" type="button">Share</a>`;
      }
      html+=`</div>`;

      var payPauseBtn = $('<span>', { class: 'play-pause-btn paused', style: 'cursor:pointer' });
      // playPauseBtnClickEvent(payPauseBtn, payPauseBtn, value);

    });

    $("#pagination-data").append(html);
    dzsag_init('.audiogallery.auto-init', {
      init_each: true
    });
  }

	function loadMoreData(page){
	  $.ajax({
      url: '?page=' + page,
      type: "get",
      beforeSend: function()
      {
        $('.loader').show();
        Loading = true;
      }
    })
    .done(function(data)
    {
      if (data.tracks.data === undefined || data.tracks.data.length == 0) {
        lastpage = true;
        $('.no-record').show();
        $('.loader').hide();
      }
      else{
        renderTracks(data.tracks.data);
        $('.loader').hide();
      }
      Loading = false;
    })
    .fail(function(jqXHR, ajaxOptions, thrownError)
    {
      alert('server not responding...');
      Loading = false;
    });
	}
</script>
@endpush
