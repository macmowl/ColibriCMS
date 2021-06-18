<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Neo Ighodaro">
    <title>Colibri CMS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style>
    body {
      padding-top: 54px;
    }
    @media (min-width: 992px) {
      body {
          padding-top: 56px;
      }
    }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/">Colibri</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

                @auth
                <li class="nav-item">
                     <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/logout">
                    Log out
                  </a>
                  <form id="logout-form" action="logout" method="POST" style="display: none;">
                    @csrf
                  </form>
                 </li>
                 @else
                 <li class="nav-item">
                     <a class="nav-link" href="/login">Login</a>
                </li>
                 <li class="nav-item">
                     <a class="nav-link" href="/register">Register</a>
                 </li>
                 @endauth

          </ul>
        </div>
      </div>
    </nav>

    <div id="app">
        @yield('content')
    </div>

    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Colibri CMS 2021</p>
      </div>
    </footer>
  </body>
</html>
