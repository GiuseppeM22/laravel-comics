
<header class="p-3">
    <section>
        <div class="boxed boxedHeader flex">
            <div class="logo">
                <img src={{ Vite::asset('resources/img/dc-logo.png') }} alt="img">
            </div>
            <div class="menu">
                @foreach ($links as $link)
                    <a href="{{$link}}">{{$link}}</a>
                @endforeach
            </div>
        </div>
    </section>
</header>