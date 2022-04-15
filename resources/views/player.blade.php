<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="{{ asset('audioplayer/libs/jquery/jquery.js')}}" type="text/javascript"></script>
    <link rel='stylesheet' type="text/css" href="{{ asset('audioplayer/audioplayer/audioplayer.css')}}"/>
    <script src="{{ asset('audioplayer/audioplayer/audioplayer.js')}}" type="text/javascript"></script>

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <div id="ag1" class="audiogallery skin-wave auto-init" style="opacity:0; margin-top: 70px;"
  data-options='{
  "cueFirstMedia": "on",
  "autoplay": "off",
  "autoplayNext": "on",
  "design_menu_position": "bottom",
  "enable_easing": "on",
  "playlistTransition": "fade",
  "design_menu_height": "200"
  }'

  
  ><!-- options for playlist in data-options -->
  <div class="items">
    <div class="audioplayer-tobe  skin-wave button-aspect-noir" data-thumb="{{ asset('audioplayer/img/e1.jpg')}}"
    data-type="audio"
    data-source="{{ asset('upload/steph1.mp3')}}"
    data-options='{
    "settings_php_handler": "ilyrics-lara/public/audioplayer/inc/php/publisher.php",
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
    ><!-- options for player in data-options -->
      <div class="feed-dzsap feed-artist">Artist 1</div>
      <div class="feed-dzsap feed-songname">Song 1</div>
    </div>
  <div class="audioplayer-tobe  skin-wave" data-thumb="{{ asset('audioplayer/img/e1.jpg')}}"
    data-type="audio"
    data-source="{{ asset('upload/steph1.mp3')}}"  >
      <div class="feed-dzsap feed-artist">Artist 2</div>
      <div class="feed-dzsap feed-songname">Song 2</div>
    </div>
  <div class="audioplayer-tobe  skin-wave" data-thumb="{{ asset('audioplayer/img/e2.jpg')}}"
    data-type="audio"
    data-source="{{ asset('upload/steph1.mp3')}}"  >
      <div class="feed-dzsap feed-artist">Artist 3</div>
      <div class="feed-dzsap feed-songname">Song 3</div>
    </div>
  <div class="audioplayer-tobe  skin-wave" data-thumb="{{ asset('audioplayer/img/e3.jpg')}}"
    data-type="audio"
    data-source="{{ asset('upload/steph1.mp3')}}"  >
      <div class="feed-dzsap feed-artist">Artist 4</div>
      <div class="feed-dzsap feed-songname">Song 4</div>
    </div>
  </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script>
jQuery(document).ready(function ($) {
var settings_ap = {
disable_volume: 'off'
,disable_scrub: 'default'
,design_skin: 'skin-wave'
,skinwave_dynamicwaves:'on'
};
dzsag_init('#ag1',{
'transition':'fade'
,'autoplay' : 'on'
,'settings_ap':settings_ap
});
});
</script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>