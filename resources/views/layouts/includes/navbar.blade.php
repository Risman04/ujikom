
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=" {{ route('logout') }} "
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" 
            role="button">
          <i class="fas fa-th-large"></i> Logout
        </a>
        <form action="{{ route('logout') }}" id="logout-form" method="post">
            @csrf
        </form>
      </li>
    </ul>
    

    <!-- Right navbar links -->

  </nav>
  <!-- /.navbar -->