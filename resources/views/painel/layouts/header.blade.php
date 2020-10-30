  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('home') }}" class="nav-link">Home</a>
      </li>      
      {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Frontend</a>
      </li> --}}
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">   
      <li class="nav-item">
        <a class="nav-link" href="#" role="button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <i class="fa fa-power-off"></i> Sair
        </a>
        <form action="{{ route('logout') }}" method="POST" id="logout-form" style="display:none;"> 
          @csrf
        </form>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->