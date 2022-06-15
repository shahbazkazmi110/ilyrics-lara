@extends('layout.base')
@if($track)
@section('banner')
<div class="container">
    <div class="pagetitle border-0 pb-4">  
        <div class="banner_inner">
            <x-load-track :track="$track" type="single"/>
        </div>
    </div>
</div>
@endsection
@endif
@section('content')
<main>
    @if($track)
    <div class="container">
        <div class="mb-50 pb-5">
            @foreach($genres_title as $genre)
                <a href="{{ route('genre', ['id' => $genre->id]) }}"><button type="button" class="btn btn--ordinary btn--small"> {{ $genre->title }} </button></a>
            @endforeach

            @foreach($track_tags as $tag)
                <a href="{{ route('tracks-by-tag', ['id' => $tag->id]) }}"><button type="button" class="btn btn--ordinary btn--small"> {{ $tag->title }} </button></a>
            @endforeach
        </div>
        
        <div class="border-bottom pb-5 mb-5 pt-4" style="position:relative;">
            <div class="row">
                <div class="col-6">
                    <h3 id="idHeadLyrics">Lyrics</h3>
                </div>
                <div class="col-6"> 
                    @if(!empty($track->transliteration))
                    <button id="translation-button" data-language="eng" class="btn btn--ordinary btn--small">See in Urdu</button>
                    @endif
                    
                    {{-- <button id="translation-button" data-language="eng" class="btn btn--ordinary btn--small">See in English</button> --}}
                </div>
            </div>
            <div class="mb-4 pt-4" style="width:50%"><span style="width:50%" class="controlFont"> <a data-control="min" class="FontControl" style="font-size:15px !important;text-align:center;color:#fff;">-</a> <a class="resultControl" style=" width: 65%; display: inline-block; text-align: center;color:#fff; "><span id="fontChangePercentage">110</span>%</a> <a data-control="max" class="FontControl" style="font-size:18px !important;color:#fff;">+</a></span>
            </div>
            <div class="left-area mb-4" id="LyrArea" style="max-width:600px;">
                <div class="effectFont row">
                    <div id="lyrics-div" class="col-12 col-md-8"> {!! html_entity_decode($track->lyrics) !!} </div>
                    @if(!empty($track->transliteration))
                    <div id="translation-div" class="col-12 col-md-8"> {!! html_entity_decode($track->transliteration) !!} </div>
                     @endif
                </div>
                {{-- <div class="left-area" id="TransArea" style="clear:both;  display:none;position:relative">
                    <p class="effectFont"></p>
                </div> --}}
            </div>
            {{-- <div class="left-area" id="TransArea" style="clear:both;  display:none;position:relative">
                <p class="effectFont"></p>
            </div> --}}
        </div>
    </div>
    @else
    <div class="container" style="min-height: 100px"> 
        <p class="mt-5 pt-5 pb-5">Track Not Found </p>
    </div>
    @endif
</main>
<x-tags :tags="$tags"/>
<x-genres :genres="$genres"/>
@endsection
@push('scripts')
<script>
    $(".FontControl").on("click", function () {
    setupFontControlPrivate($(this).data("control"), "1");
});
function setupFontControlPrivate(control, removeItem) {
    maxSize = 80
    minSize = 14
    emSize = parseFloat($('.effectFont p').css("font-size"));
    percentage = parseFloat($('#fontChangePercentage').html());
    if (removeItem != undefined) {
    }
    if (control == 'min' && emSize > minSize) {
        Size = emSize - 2
        percentage = percentage - 10
        $('.effectFont p,.effectFont span').css('font-size', Size + 'px')
        $('#fontChangePercentage').html(percentage);
    }
    if (control == 'max' && emSize < maxSize) {
        Size = emSize + 2
        percentage = percentage + 10
        $('.effectFont p,.effectFont span').css('font-size', Size + 'px')
        $('#fontChangePercentage').html(percentage);
    }
}

</script>
@endpush
@if(!empty($track->transliteration))
@push('extrascripts')
<script>
$("#translation-div").hide();
$('#translation-button').on('click',function(){
    var lang = $(this).attr("data-language");
    if(lang == 'eng'){
        $(this).html('See in English');
        $("#lyrics-div").hide(500);
        $("#translation-div").show(500);
        $(this).attr("data-language",'urdu');
    }else{
        $(this).html('See in Urdu');
        $("#lyrics-div").show(500);
        $("#translation-div").hide(500);
        $(this).attr("data-language",'eng');
    }
});
</script>
@endpush
@endif
