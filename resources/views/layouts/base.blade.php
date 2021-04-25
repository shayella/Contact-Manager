<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>contactmanager - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style media="screen">
      #header, footer{
        background-color: teal;
      }

      .logo{
        color: #fff;
        font-size: 30px;

      }

      .nav-link{
        font-size: 18px;
        color:#f2f2f2;
      }
      .logo:hover, .nav-link:hover{
        color:#f2f2f2;
      }
      footer{
        color: #fff;
      }
    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    />
  </head>
  <body>
    <!-- Header containing nav bar -->
    <header id="header">
      <div class="container">
        <nav class="navbar navbar-expand-lg">
        <a id="logo" class="navbar-brand logo mr-5" href="/">ContactManager</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-5">
                <li class="nav-item">
              <a class="nav-link mr-4 mr-sm-2" href="/contacts/create"><i class="fas fa-plus"></i>&nbsp;Add Contacts</a>
            </li>

            <li class="nav-item">
              <a class="nav-link my-2 my-sm-0 mr-4" href="/contacts/"><i class="fas fa-eye"></i>&nbsp;View Contacts</a>
            </li>
          </ul>

    </div>
  </nav>
      </div>


    </header>


    <div class="container mt-4">
      @include('inc.messages')
      @yield('content')
    </div>

<!-- footer -->
    <footer class="mt-4 p-2">
     <p class="text-center p-1 m-0">&copy; ContactsManager@Killit 2019</p>
   </footer>
  </body>
</html>
