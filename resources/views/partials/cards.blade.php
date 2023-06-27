
@foreach ($images as $image)
    <div class="card">
            <img src={{$image["thumb"]}} alt="images">
            <span>{{ $image["series"] }}</span>
        </div>
@endforeach
    <button class="load">LOAD MORE</button>
