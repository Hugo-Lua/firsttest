

<div class="container-fluid p-5">
    <h1 class="text text-light">
        <a href="/games/7" class="text text-light text-decoration-none">
            {{ $game['title'] }}
        </a>
    </h1>

    <div class="row row-col-1 row-col-xl-2 pb-5">
        <div class="col col-12 col-xl-8 py-3 bg-dark">
            <img src="{{ asset('images/' . str_replace(':', '.col', str_replace(' ', '_', $game['title'])) . '/cover.jpg') }}" style="width: stretch; max-width: 1200px; display: grid; place-items: center;">
        </div>
        <div class="col bg-dark"style="position: relative">
            <div class="row w-100">
                <div class="d-block d-xl-none justify-content-center align-items-center">
                    <div class="d-none d-md-block">
                        <div class="row my-2">
                            <div class="col">
                                <img src="{{ asset('images/' . str_replace(':', '.col', str_replace(' ', '_', $game['title'])) . '/pic1.jpg') }}" style="width: 200px;"></div>
                            <div class="col">
                                <img src="{{ asset('images/' . str_replace(':', '.col', str_replace(' ', '_', $game['title'])) . '/pic2.jpg') }}" style="width: 200px;"></div>
                            <div class="col">
                                <img src="{{ asset('images/' . str_replace(':', '.col', str_replace(' ', '_', $game['title'])) . '/pic3.jpg') }}" style="width: 200px;"></div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col col-9">
                            <p class="text text-light">
                                {{ $game['short_description'] }}
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="d-none d-xl-block">
                    <div class="row my-3">
                        <div class="col col-4">
                            <img src="{{ asset('images/' . str_replace(':', '.col', str_replace(' ', '_', $game['title'])) . '/pic1.jpg') }}" class="w-100"></div>
                        <div class="col col-4">
                            <img src="{{ asset('images/' . str_replace(':', '.col', str_replace(' ', '_', $game['title'])) . '/pic2.jpg') }}" class="w-100"></div>
                        <div class="col col-4">
                            <img src="{{ asset('images/' . str_replace(':', '.col', str_replace(' ', '_', $game['title'])) . '/pic3.jpg') }}" class="w-100"></div>
                    </div>
                    <p class="text text-light">
                        {{ $game['short_description'] }}
                    </p>
                    @foreach(explode(',', $game['tags']) as $tag)
                      <a href="/?genre={{ $tag }}" 
                        class="btn btn-sm btn-outline-secondary text text-light border border-secondary me-1"
                        type="button"
                        >
                        {{ trim($tag) }}
                      </a>
                    @endforeach
                    <ul class="my-3">
                      <li>
                        <small class="text text-light my-3">
                            Creator(s): {{ $game['creator'] }}
                        </small>
                      </li>
                      <li>
                        <small class="text text-light my-3">
                            Genre: {{ $game['genre'] }}
                        </small>
                      </li>
                      <li>
                        <small class="text text-light my-3">
                            Support email: {{ $game['email'] }}
                        </small>
                      </li>
                    </ul>
                </div>           
            </div>
        </div>
        <div class="box text-light mt-4 bg-dark">
          <div class="box text-light my-3 mx-1 bg-dark border border-secondary rounded">
            <div class="row">
              <div class="col">
                <h1 class="my-4 ms-3">Buy {{ $game['title']}}</h1>
              </div>
              <div class="col">
                <form class="my-4 text-end" method="GET" action="/buy">
                    <input type="text" id="id" name="id" readonly value="{{ $game['id'] }}" style="display:none;">
                    <button class="btn btn-outline-primary px-5 py-3 me-3">{{ rand(4,25) }}.{{ rand(0,3)*25 }}€</button>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
    <p class="text text-light">
      {{ $game['description'] }}
    </p>
</div>
 