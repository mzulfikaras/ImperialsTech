<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item justify-content-end">
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf

            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
      </li>
    </ul>
</nav>
<!-- /.navbar -->
