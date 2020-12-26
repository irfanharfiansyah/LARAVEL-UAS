<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="{{ asset('css/style2.css') }}" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-dark border-right" id="sidebar-wrapper">
       
      <div class="sidebar-heading">
          <img src="/img/logo.png" alt="tungguu" style="margin-top: -35px;">
        </div>
      <div class="list-group list-group-flush ">
        <a href="#" class="list-group-item list-group-item-action bg-dark" style="margin-top: -65px;"></a>
        <a href="/manageAll" class="list-group-item list-group-item-action bg-dark text-light"><i class="fas fa-cog"></i> Manage Recipe </a>
        <a href="/managePop" class="list-group-item list-group-item-action bg-dark text-light"><i class="fas fa-cog"></i> Manage Popular</a>
        <a href="/manageUser" class="list-group-item list-group-item-action bg-dark text-light"><i class="fas fa-users-cog"></i> Manage User</a>
        <a href="/manageCom" class="list-group-item list-group-item-action bg-dark text-light"><i class="fas fa-comment-dots"></i> Manage Comments</a>
        <a href="#" class="list-group-item list-group-item-action bg-dark text-light"></a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper" >
        <li class="nav-item dropdown float-right" style="margin-top: -19px;">
            <a id="navbarDropdown" class="nav-link dropdown-toggle bg-dark-gray" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              <img class=" mr-3" width="25px" src="{{asset('/storage/'.Auth::user()->image)}}" alt="">{{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
      <div class="container-fluid mt-5">
        @yield('welcome')
      <div class="container-fluid mt-5">
          @yield('content')
      </div>
    </div>
  </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
