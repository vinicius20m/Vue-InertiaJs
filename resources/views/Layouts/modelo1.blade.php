<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>{{config('app.name')}} -- @yield('title', 'without title')</title>

      {{-------------------------- STYLES --------------------------}}
      {{-------------------------- STYLES --------------------------}}

      <!-- CSS only -->
      <link rel="stylesheet" crossorigin="anonymous"
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      >

      @yield('styles')

</head>
<body>

      <header>
            <nav style="justify-content: center" class="navbar navbar-dark bg-dark">
                  <a class="navbar-brand h1" href="{{route('home')}}">{{config('app.name')}}</a>
            </nav>
      </header>

      <main>
            <section class="container">
                  @yield('head-content')

                  <div class="alert-div">
                        @if($errors->any())

                        <div id="error-card" class="alert alert-danger row">
                              <div class="col-md-11">

                                    <ul>
                                    @foreach($errors->all() as $error)

                                          <li> {{ $error }} </li>
                                    @endforeach
                                    </ul>
                              </div>
                              <div class="col-md-1">

                                    <button type="button" data-bs-target="#error-card" class="btn-close mt-1"
                                          aria-label="close" id="hide-error" data-bs-dismiss="alert"
                                    ></button>
                              </div>
                        </div>
                        @elseif(session('success'))

                        <div id="success-card" class="alert alert-success row">
                              <div class="col-md-11">

                                    {{ session('message') }}
                              </div>
                              <div class="col-md-1">

                                    <button type="button" data-bs-target="#success-card" class="btn-close mt-1"
                                          aria-label="close" id="hide-success" data-bs-dismiss="alert"
                                    ></button>
                              </div>
                        </div>
                        @elseif(session('error'))

                        <div id="error-card" class="alert alert-danger row">
                              <div class="col-md-11">

                                    {{ session('message') }}
                              </div>
                              <div class="col-md-1">

                                    <button type="button" data-bs-target="#success-card" class="btn-close mt-1"
                                          aria-label="close" id="hide-success" data-bs-dismiss="alert"
                                    ></button>
                              </div>
                        </div>
                        @endif
                  </div>

                  @yield('content')
            </section>
      </main>

      {{-------------------------- SCRIPTS --------------------------}}
      {{-------------------------- SCRIPTS --------------------------}}

      <!-- JavaScript Bundle with Popper -->
      <script crossorigin="anonymous"
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      ></script>

      @yield('scripts')

</body>
</html>