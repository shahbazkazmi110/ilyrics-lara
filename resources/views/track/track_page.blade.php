@extends('layout.base')
@section('banner')

<div class="container">
    <div class="pagetitle border-0 pb-4">
            
        <div class="banner_inner">
            <!-- player starts here -->
                <div id="ag2" class="audiogallery skin-wave auto-init mode-normal menu-position-bottom menu-opened dzsag-inited transition-fade playlist-transition-fade dzsag-loaded" 
                style="opacity:0; margin-top:0px;" data-options="{
                &quot;cueFirstMedia&quot;: &quot;on&quot;,
                &quot;autoplay&quot;: &quot;off&quot;,
                &quot;autoplayNext&quot;: &quot;on&quot;,
                &quot;design_menu_position&quot;: &quot;bottom&quot;,
                &quot;enable_easing&quot;: &quot;on&quot;,
                &quot;playlistTransition&quot;: &quot;fade&quot;,
                &quot;design_menu_height&quot;: &quot;200&quot;
                }">
                <!-- options for playlist in data-options -->
                <div class="items">
                    
                </div>
                <div class="slider-main"><div class="slider-clipper" style="height: 200px;">
                    <div class="skin-wave button-aspect-noir dzsap-inited preload-method-metadata skin-wave-mode-normal 
                    skin-wave-wave-mode-canvas skin-wave-wave-mode-canvas-mode-normal scrubbar-type-wave audioplayer has-thumb 
                    structure-setuped media-setuped active active-from-gallery listeners-setuped dzsap-loaded meta-loaded init-loaded 
                    transitioning-out-complete scrubbar-loaded time-total-visible" data-thumb="https://ilyrics.org/admin//uploads/3cayipwe6xc0wkgw.jpg" data-type="audio" data-source="https://iLyrics.org/admin/uploads/audio//Wato_Izzo_Mantasha.mp3" data-options="{
                        &quot;settings_php_handler&quot;: &quot;inc/php/publisher.php&quot;,
                        &quot;skinwave_comments_enable&quot;: &quot;on&quot;,
                        &quot;skinwave_comments_retrievefromajax&quot;: &quot;on&quot;,
                        &quot;pcm_data_try_to_generate&quot;: &quot;on&quot;,
                        &quot;pcm_data_try_to_generate_wait_for_real_pcm&quot;: &quot;on&quot;,
                        &quot;skinwave_wave_mode_canvas_waves_number&quot;: 3,
                        &quot;skinwave_wave_mode_canvas_waves_padding&quot;: 1,
                        &quot;skinwave_wave_mode_canvas_reflection_size&quot;: 0.25,
                        &quot;design_color_bg&quot;: &quot;444444&quot;,
                        &quot;design_color_highlight&quot;: &quot;aa4444&quot;
                        }" data-playerid="httpsiLyricsorgadminuploadsaudioWatoIzzoMantashamp3" data-reflection-size="0.75" style="" data-pcm="[0,0,0,0,0,0.31,0.42,0.49,0.72,0.33,0.32,0.2,0.42,0.54,0.36,0.31,0.54,0.35,0.43,0.49,0.33,0.67,0.5,0.48,0.3,0.6,0.5,0.54,0.39,0.45,0.46,0.6,0.55,0.62,0.51,0.53,0.38,0.65,0.59,0.24,0.45,0.7,0.23,0.21,0.25,0.8,0.36,0.68,0.6,0.58,0.54,0.21,0.46,0.22,0.48,0.47,0.14,0.41,0.55,0.2,0.42,0.27,0.41,0.37,0.22,0.55,0.48,0.59,0.48,0.69,0.35,0.53,0.23,0.49,0.68,0.41,0.37,0.49,0.48,0.68,0.5,0.52,0.38,0.36,0.62,0.24,0.49,0.2,0.36,0.42,0.43,0.56,0.22,0.36,0.37,0.49,0.42,0.38,0.44,0.57,0.69,0.64,0.51,0.54,0.47,0.52,1.01,0.52,0.67,0.31,0.57,0.44,0.35,0.28,0.68,0.35,0.3,0.5,0.3,0.48,0.23,0.26,0.31,0.27,0.39,0.46,0.24,0.53,0.62,0.22,0.43,0.42,0.21,1.02,0.36,0.63,0.45,0.32,0.63,0.32,0.36,0.77,0.28,0.25,0.42,0.49,0.76,0.68,0.78,0.38,0.52,0.4,0.26,0.52,0.34,0.35,0.5,0.39,0.48,0.46,0.86,0.43,0.26,0.72,0.41,0.54,0.61,0.42,0.58,0.48,0.24,0.54,0.44,0.44,0.39,0.66,0.33,0.64,0.5,0.59,0.45,0.79,0.41,0.47,0.28,0.49,0.22,0.23,0.29,0.35,0.27,0.42,0.24,0.32,0.46,0.54,0.4,0.27,0.45,0.62,0.41,0.3,0.78,0.36,0.74,0.23,0.42,0.64,0.21,0.7,0.61,0.65,0.57,0.3,0.45,0.38,0.52,0.3,0.37,0.43,0.33,0.39,0.35,0.45,0.23,0.33,0.34,0.49,0.55,0.51,0.31,0.63,0.23,0.43,0.3,0.12,0.49,0.43,0.74,0.82,0.47,0.51,0.76,0.32,0.31,0.82,0.7,0.43,0.38,0.4,0.2,0.48,0.47,0.26,0.41,0.17,0.52,0.58,0.32,0.43,0.49,0.7,0.67,0.33,0.4,0.41,0.48,0.74,0.55,0.27,0.5,0.35,0.61,0.45,0.48,0.3,0.39,0.8,0.72,0.77,0.24,0.72,0.32,0.36,0.31,0.37,0.32,0.42,0.25,0.27,0.26,0.5,0.37,0.22,0.52,0.22,0.66,0.28,0.35,0.28,0.94,0.7,0.37,0.61,0.2,0.28,0.36,0.45,0.51,0.24,0.59,0.86,0.83,0.19,0.51,0.27,0.23,0.33,0.43,0.25,0.34,0.33,0.52,0.28,0.35,0.5,0.46,0.44,0.36,0.7,0.44,0.5,0.62,0.3,0.66,0.59,0.39,0.28,0.35,0.52,0.33,0.49,0.3,0.31,0.66,0.25,0.43,0.5,0.54,0.26,0.36,0.42,0.34,0.33,0.42,0.39,0.31,0.41,0.7,0.18,0.35,0.77,0.35,0.41,0.68,0.41,0.25,0.59,0.26,0.21,0.51,0.44,0.72,0.57,0.64,0.43,0.43,0.78,0.33,0.77,0.61,0.75,0.29,0.4,0.31,0.47,0.25,0.54,0.31,0.28,0.27,0.29,0.37,0.23,0.51,0.26,0.2,0.16,0.06,0.04]">
                        <!-- options for player in data-options -->
                        <div class="feed-dzsap feed-artist"><a href="https://ilyrics.org/artist.php?id=16"> {{ $track_list->artist_name }} </a></div>
                        <div class="feed-dzsap feed-songname">{{ $track_list->title }}</div>	                     
                    <div class="audioplayer-inner"><div class="the-thumb-con"><div class="the-thumb" style=" background-image:url('{{ \App\Helpers\Helper::format_image($track_list->image_name, 0) }}')"></div></div>
                    <div class="the-media"><audio id="httpsiLyricsorgadminuploadsaudioWatoIzzoMantashamp3-audio" preload="metadata"><source src="https://iLyrics.org/admin/uploads/audio//Wato_Izzo_Mantasha.mp3" type="audio/mpeg"></audio></div>
                        <div class="ap-controls scrubbar-loaded">
                            <div class="scrubbar scrubbar-inited">
                                <div class="scrub-bg">
                                    <canvas class="scrubbar-type-wave--canvas scrub-bg-img preparing-transitioning-in transitioning-in" width="1031" style="width: 1031px;" height="75"></canvas></div><div class="scrub-buffer"></div><div class="scrub-prog" style="width: 0px;"><canvas class="scrubbar-type-wave--canvas scrub-prog-img preparing-transitioning-in transitioning-in" width="1031" style="width: 1031px;" height="75"></canvas></div><div class="scrubBox"></div><div class="scrubBox-prog"></div><div class="scrubBox-hover"></div><div class="total-time" style="top: 35.25px;">06:50</div><div class="curr-time" style="left: 0px; top: 35.25px;">00:00</div></div><div class="con-controls"><div class="the-bg"></div>
                                    <div class="con-playpause-con"><div class="con-playpause">
                                        <div class="playbtn player-but" aria-controls="httpsiLyricsorgadminuploadsaudioWatoIzzoMantashamp3-audio">
                                        <div class="the-icon-bg"></div><div class="dzsap-play-icon">
                                        <svg class="svg-icon" version="1.1" id="Layer_2" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" width="11.161px" height="12.817px" viewBox="0 0 11.161 12.817" enable-background="new 0 0 11.161 12.817" xml:space="preserve">
                                         <path fill="#D2D6DB" d="M8.233,4.589c1.401,0.871,2.662,1.77,2.801,1.998c0.139,0.228-1.456,1.371-2.896,2.177l-4.408,2.465 c-1.44,0.805-2.835,1.474-3.101,1.484c-0.266,0.012-0.483-1.938-0.483-3.588V3.666c0-1.65,0.095-3.19,0.212-3.422 c0.116-0.232,1.875,0.613,3.276,1.484L8.233,4.589z"></path>  </svg>  </div></div>
                                    <div class="pausebtn player-but">
                                        <div class="the-icon-bg"></div><div class="pause-icon"> 
                                        <svg class="svg-icon" version="1.1" id="Layer_3" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink" x="0px" y="0px" width="12px" height="13px" viewBox="0 0 13.415 16.333" enable-background="new 0 0 13.415 16.333" xml:space="preserve"> 
                                        <path fill="#D2D6DB" d="M4.868,14.59c0,0.549-0.591,0.997-1.322,0.997H2.2c-0.731,0-1.322-0.448-1.322-0.997V1.618 c0-0.55,0.592-0.997,1.322-0.997h1.346c0.731,0,1.322,0.447,1.322,0.997V14.59z"></path> 
                                        <path fill="#D2D6DB" d="M12.118,14.59c0,0.549-0.593,0.997-1.324,0.997H9.448c-0.729,0-1.322-0.448-1.322-0.997V1.619 c0-0.55,0.593-0.997,1.322-0.997h1.346c0.731,0,1.324,0.447,1.324,0.997V14.59z"></path> </svg>  
                                    </div></div></div></div>
                                    <div class="meta-artist-con">
                                        <span class="meta-artist player-artistAndSong">
                                        <span class="the-artist">
                                        <a href="https://ilyrics.org/artist.php?id=16">
                                         {{ $track_list->artist_name }} </a></span>
                                         <span class="the-name player-meta--songname">{{ $track_list->title }}</span></span></div>
                                    <div class="ap-controls-right">
                                        <div class="controls-volume">
                                        <div class="volumeicon"></div>
                                    <div class="volume_static"></div>
                                    <div class="volume_active" style="width: 26px;"></div>
                        <div class="volume_cut"></div></div></div></div></div></div>
                        <div id="wavesurfer_httpsiLyricsorgadminuploadsaudioWatoIzzoMantashamp3" class="hidden">
                        <wave style="display: block; position: relative; user-select: none; height: 128px; overflow: auto hidden;">
                        <canvas width="0" height="128" style="position: absolute; z-index: 1; left: 0px; top: 0px; bottom: 0px; width: 0px;"></canvas>
                        <wave style="position: absolute; z-index: 2; left: 0px; top: 0px; bottom: 0px; overflow: hidden; width: 0px; display: block; box-sizing: border-box; border-right: 1px solid rgb(51, 51, 51);">
                        <canvas width="0" height="128" style="width: 0px;"></canvas></wave>
                    </wave>
                    </div></div></div></div></div>
                                
                <!-- / player starts here -->
                <div class="d-block d-md-none pt-3">
                    <div class="dropdown">
                    <button class="btn btn--ordinary btn--small__extra dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="min-width:230px;">
                        Add / Share / Download
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="https://ilyrics.org/html/v2/track_page.html#">Add Favorites</a></li>
                        <li><a class="dropdown-item" href="https://ilyrics.org/html/v2/track_page.html#">Add to Playlist</a></li>
                        <li><a class="dropdown-item" href="https://ilyrics.org/html/v2/track_page.html#">Download</a></li>
                        <li><a class="dropdown-item" href="https://ilyrics.org/html/v2/track_page.html#">Share</a></li>
                    </ul>
                    </div>
                </div>
                <div class="text-end pt-2 pt-md-0 player_btns d-none d-md-block">
                <button class="btn btn--ordinary btn--small__extra" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add Favorites</button>
                <button class="btn btn--ordinary btn--small__extra" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add to Playlist</button>
                <button class="btn btn--ordinary btn--small__extra" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Download</button>
                <button class="btn btn--ordinary btn--small__extra" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Share</button>
                </div>

        </div>
    
    </div>
</div>

@endsection
    
@section('content')

<main>
    <div class="container">
        <div id="box">
            <div class="mb-50 text-end pb-5">
                @foreach($track_list->genres_title as $genre)
                    <button type="button" class="btn btn--ordinary btn--small"> {{ $genre->title }} </button>
                @endforeach
            </div>
            
            <div class="border-bottom pb-5 mb-5 pt-4" style="position:relative;">
                <h3 id="idHeadLyrics">Lyrics</h3>
{{-- 
                <div id="box">
                    <p>View Translation</p>
                    <button type="button" class="btn btn--ordinary btn--small">See in urdu</button>
                </div> --}}
                
                
                <div class="mb-4 pt-4" style="width:50%"><span style="width:50%" class="controlFont"> <a data-control="min" class="FontControl" style="font-size:12px !important;text-align:center;color:#fff;">A</a> <a class="resultControl" style=" width: 65%; display: inline-block; text-align: center;color:#fff; "><span id="fontChangePercentage">110</span>%</a> <a data-control="max" class="FontControl" style="font-size:16px !important;color:#fff;">A</a></span>
                    <button type="button" class="btn btn--ordinary btn--small">See in urdu</button>
                </div>
                <div class="left-area" id="LyrArea" style="max-width:900px;">
                    <div class="effectFont row">
                        
                        <div class="col-12 col-md-6"> {!! html_entity_decode($track_list->lyrics) !!} </div>

                        {{-- <div id="trans" class="col-12 col-md-6"> {!! html_entity_decode($track_list->transliteration) !!} </div> --}}
                    
                        {{-- <div class="ajax-load">
                            <div class="loader spinner-border text-success" role="status">
                                <span class="visually-hidden">
                                    <div id="pagination-data" class="col-12 col-md-6"> 
                                        {!! html_entity_decode($track_list->transliteration) !!} 
                                    </div></span>
                            </div>
                        </div> --}}

                        <div id="ajax-load">
                            <div id="pagination-data" class="col-12 col-md-6"> 
                                {!! html_entity_decode($track_list->transliteration) !!} 
                            </div>

                        </div>

                        <br>
                        </p>
                        
                    </div>
                </div>
                <div class="left-area" id="TransArea" style="clear:both;  display:none;position:relative">
                    <p class="effectFont"></p>
                </div>
            </div>

        </div>
    </div>
    
            
</main>

<x-tags :tags="$tags"/>
<x-genres :genres="$genres"/>

@endsection

@push('audio-styles')
<link rel="stylesheet" href="{{ asset('audioplayer/audioplayer/audioplayer.css')}}">
@endpush
@push('audio-scripts')
<script type="text/javascript" src="{{ asset('audioplayer/audioplayer/audioplayer.js')}}"></script>
@endpush


{{-- <script>
    $(document).ready(function(){
        $("button").click(function(){
            $("#ajax-load").load("track.track_page");
        });
    });
</script> --}}


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


	function loadMoreData(page){
	  $.ajax(
	        {
	            url: '?page=' + page,
                type: "get",
	            beforeSend: function()
	            {
	                $('.ajax-load').show();
                    Loading = true;
	            }
	        })
	        .done(function(data)
	        {
	            if(data.html == '' ){
                    lastpage = true;
	                $('.ajax-load').html("No more records found");
	                return;
	            }
	            $('.ajax-load').hide();
	            $("#pagination-data").append(data.html);
                Loading = false;

	        })

	        .fail(function(jqXHR, ajaxOptions, thrownError)
	        {
	              alert('server not responding...');
	        });
	}
</script>
@endpush

