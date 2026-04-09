@extends('layout')
<title>Games Store</title>

@section('content')

<style>
.overlay-content {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    background-size: cover;
    background-position: center;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}
.overlay-content-btn {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    background-size: cover;
    background-position: center;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.position-relative:hover .overlay-content {
    opacity: 1;
    pointer-events: auto;
}
</style>

@if(count($games)== 0)
    <div class="container-fluid m-5" style="color: {{ $c_secondary_text }};">
        <p>No games found</p>
    </div>
@endif
<div class="container-fluid">

    @if (request()->query('genre') == null)
        <div class="container-fluid">
            <h6 class="text-secondary-subtle border-bottom border-secondary pb-3">Today's pick</h6>
            <h1 class="text text-light">
                <a href="/games/7" class="text text-light text-decoration-none">
                    Animal Well
                </a>
            </h1>

            <div class="row row-col-1 row-col-xl-2 pb-5">
                <div class="col col-12 col-xl-8 py-3 bg-dark">
                    <img src="images/Animal_Well/pic2.jpg" style="width: stretch; max-width: 1200px; display: grid; place-items: center;">
                </div>
                <div class="col bg-dark" style="position: relative">
                    <div class="row w-100">
                        <div class="d-block d-xl-none justify-content-center align-items-center">
                            <div class="d-none d-md-block">
                                <div class="row my-2">
                                    <div class="col">
                                        <img src="images/Animal_Well/pic1.jpg" style="width: 200px;"></div>
                                    <div class="col">
                                        <img src="images/Animal_Well/pic3.jpg" style="width: 200px;"></div>
                                    <div class="col">
                                        <img src="images/Animal_Well/pic4.jpg" style="width: 200px;"></div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col col-9">
                                    <p class="text text-light">
                                        A dense, atmospheric Metroidvania set inside a strange underground world filled with glowing creatures and layered secrets. Some of those secrets were designed to take the entire global player community months to uncover together.
                                    </p>
                                </div>
                                <div class="col col-2">
                                    <a href="/games/7">
                                        <button class="btn btn-primary py-3 my-3 mx-3 w-25" style="position: absolute; bottom: 0; right:0;" type="button">
                                            <h3>More ></h3>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-none d-xl-block">
                            <div class="row my-3">
                                <div class="col col-4">
                                    <img src="images/Animal_Well/pic1.jpg" class="w-100"></div>
                                <div class="col col-4">
                                    <img src="images/Animal_Well/pic3.jpg" class="w-100"></div>
                                <div class="col col-4">
                                    <img src="images/Animal_Well/pic4.jpg" class="w-100"></div>
                            </div>
                            <p class="text text-light">
                                A dense, atmospheric Metroidvania set inside a strange underground world filled with glowing creatures and layered secrets. Some of those secrets were designed to take the entire global player community months to uncover together.
                            </p>
                            
                            <a href="/games/7">
                                <button class="btn btn-primary py-2 my-3 mx-5 w-50" style="position: absolute; bottom: 0; right:0;" type="button">
                                    More >
                                </button>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="row mx-3">
    @foreach($games as $game)
        <div class="col col-12 col-sm-6 col-md-4 col-xl-3 border border-dark p-3 ">
            <a href="/games/{{ $game['id'] }}">
                <div class="position-relative d-inline-block">
                    <img src="images/{{ str_replace(':', '.col', str_replace(' ', '_', $game['title'])) }}/cover.jpg" 
                        class="img-fluid w-100" alt="{{ $game['title'] }}">
                    <div class="overlay-content"
                        style="background-image: url('images/{{ str_replace(':', '.col', str_replace(' ', '_', $game['title'])) }}/pic1.jpg');">
                    </div>
                </div>
            </a>

            <div class="d-block" style="position: relative">
                <div class="row w-100">
                    <div class="col col-10">
                        <a href="/games/{{ $game['id'] }}" class="text text-light text-decoration-none">
                            <h2>{{ $game['title'] }}</h2>
                            <small class="text text-end" style="color: {{ $c_secondary_text }};">{{ rand(4,25) }}.{{ rand(0,3)*25 }}€</small>
                        </a>
                    </div>
                </div>
                
            </div>

            <div class="d-grid mt-2">
                <div class="row mb-3">
                    <div class="col">
                    @foreach(explode(',', $game['tags']) as $tag)
                        <a href="/?genre={{ $tag }}" 
                            class="btn btn-sm btn-outline-secondary text text-light border border-secondary me-1"
                            type="button"
                            >
                            {{ trim($tag) }}
                        </a>
                    @endforeach
                    </div>
                </div>
            </div>
            <p class="d-none d-md-block" style="color:{{ $c_secondary_text }};">{{ $game['short-description'] }}</p>
        </div>
    @endforeach
    </div>
</div>
@endsection('content')


