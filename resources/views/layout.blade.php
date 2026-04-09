<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Layout</title>
</head>
  <body style="background-color: #494949;">

    <nav id="global-nav-desktop" class="pb-5">
      <div class="container-fluid p-3 border-bottom border-secondary" style="background-color: #535353;">
        <div class="row">
          <div class="d-none d-md-flex">
            <div class="col">
              <a href="/">
                <img src={{ asset('images/logo_black.png') }} style="width: 200px;" alt="Logo png">
              </a>
            </div>
            <div class="col">
              <a href="?genre=Roguelike" class="text text-decoration-none" style="color: #acacac;">
                <h6 class="my-3 mt-4">Roguelikes</h6>
              </a>
            </div>
            <div class="col">
              <a href="?genre=Puzzle" class="text text-decoration-none" style="color: #acacac;">
                <h6 class="my-3 mt-4">Puzzle</h6>
              </a>
            </div>
            <div class="col">
              <a href="?genre=Platformer" class="text text-decoration-none" style="color: #acacac;">
                <h6 class="my-3 mt-4">Platformer</h6>
              </a>
            </div>
            <div class="col">
              <a href="?genre=Story-rich" class="text text-decoration-none" style="color: #acacac;">
                <h6 class="my-3 mt-4">Story-Rich</h6>
              </a>
            </div>
            <div class="col">
              <a href="?genre=Multiplayer" class="text text-decoration-none" style="color: #acacac;">
                <h6 class="my-3 mt-4">Multiplayer</h6>
              </a>
            </div>
          </div>


          <div class="d-block d-md-none text-center">
            <div class="col">
              <a href="/">
                <img src={{ asset('images/logo_black.png') }} style="width: 200px;" alt="Logo png" class="w-25">
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <!-- Main website in here -->
      @yield('content')

    </div>

    <section id="footer-wrapper" class="border-top border-secondary mt-5"  style="background-color: #535353;">
      <div class="container">
        <footer class="py-5">
          <div class="row">
            <div class="col d-none d-lg-block">
              <a>
                <img src={{ asset('images/logo_black.png') }} alt="Image logo" style="height:100px;">
              </a>
            </div>
            <div class="col col-1"></div>
            <div class="col">
              <ui>
                <h4 class="text text-decorative-underline text-light">Alpha</h4>
                <a href="#Uno"class="text text-light text-decoration-none text-light"><h6>Uno</h6></a>
                <a href="#Dos"class="text text-light text-decoration-none text-light"><h6>Dos</h6></a>
                <a href="#Tres"class="text text-light text-decoration-none text-light"><h6>Tres</h6></a>
              </ui>
            </div>
            <div class="col">
              <h4 class="text text-decorative-underline text-light">Beta</h4>
              <a href="#Uno"class="text text-light text-decoration-none text-light"><h6>Mono</h6></a>
              <a href="#Dos"class="text text-light text-decoration-none text-light"><h6>Bi</h6></a>
              <a href="#Tres"class="text text-light text-decoration-none text-light"><h6>Tri</h6></a>
            </div>
            <div class="col">
              <h4 class="text text-decorative-underline text-light">Gamma</h4>
              <a href="#Uno"class="text text-light text-decoration-none text-light"><h6>Ett</h6></a>
              <a href="#Dos"class="text text-light text-decoration-none text-light"><h6>Två</h6></a>
              <a href="#Tres"class="text text-light text-decoration-none text-light"><h6>Tre</h6></a>
            </div>
          </div>
        </footer>
      </div>
    </section>
  </body>
</html>