@extends('layouts.app')

@section('content')

     <!-- sezione colore nero -->
     <section>
        <div class="jumbo">
            <img src={{ Vite::asset('resources/img/jumbotron.jpg') }} alt="jumbotron">
            <button>CURRENT SERIES</button>
        </div>
    </section>
    <section class="bg_black">
        <div class="boxed boxedMain">
            @include('partials.cards')
        </div>
    </section>
    <!-- sezione colore blue -->
    <section class="bg_blue">
        <div class="boxed icon flex">
            <div class="iconImg flex">
                @foreach($icons as $icon)
                    <img src={{ Vite::asset($icon["path"]) }} alt="icon">
                    <span>{{ $icon["name"]  }}</span>
                @endforeach
            </div>
        </div>
    </section>
    <!-- sezione background immagine -->
    <section class="bg_image">
        <div class="boxed boxSpace flex">
            <div class="infos flex">
                <div class="leftInfo mr_30">
                    <div class="Comicsinfo">
                        <h3>DC COMICS</h3>
                        <ul>
                            <li>Characters</li>
                            <li>Characters</li>
                            <li>Characters</li>
                            <li>Characters</li>
                            <li>Characters</li>
                            <li>Characters</li>
                        </ul>
                    </div>
                    <div class="shopInfo">
                        <h3>SHOP</h3>
                        <ul>
                            <li>Characters</li>
                            <li>Characters</li>
                        </ul>
                    </div>
                </div>
                <div class="DCinfo mr_30">
                    <h3>DC</h3>
                    <ul>
                        <li>Characters</li>
                        <li>Characters</li>
                        <li>Characters</li>
                        <li>Characters</li>
                        <li>Characters</li>
                        <li>Characters</li>
                        <li>Characters</li>
                        <li>Characters</li>
                        <li>Characters</li>
                        <li>Characters</li>
                    </ul>
                </div>
                <div class="SiteInfo">
                    <h3>SITES</h3>
                    <ul>
                        <li>Characters</li>
                        <li>Characters</li>
                        <li>Characters</li>
                        <li>Characters</li>
                        <li>Characters</li>
                        <li>Characters</li>
                    </ul>
                </div>
            </div>
            <div class="bigLogoImg">
                <img src={{Vite::asset('resources/img/dc-logo-bg.png')}} alt="">
            </div>
        </div>
    </section>
@endsection