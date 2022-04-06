@foreach ($playlists as $playlist) 
<div class="col-xl-2 col-lg-3 col-md-4 col-6 d-flex align-items-stretch mb-mb-5 mb-4">
    <a href="{{ route('tracks-by-artist', ['id' => $playlist->id]) }}" class="card card--reciter mb-0">
        <div class="card--reciter__image" style="background-image: url('{{ \App\Helpers\Helper::format_image($playlist->image_name, 0) }}');"></div>
        <div class="card--reciter__content">{{ $playlist->title}}</div>
    </a>
</div>
@endforeach