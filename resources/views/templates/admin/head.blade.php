<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="{{ route('home') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>R</b>P</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Ratu</b>System</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->          
          <!-- Control Sidebar Toggle Button -->
          <li style="margin-top: 12px; margin-right: 10px">
            <form method="post" action="{{ route('logout') }}">
              @csrf
              <button type="submit"><a href=""><i  class="fa fa-sign-out"></i></a></button>
            </form>            
          </li>
        </ul>
      </div>

    </nav>
  </header>