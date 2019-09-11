<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->
                    <form id="logout-form" action="https://material-dashboard-laravel.creative-tim.com/logout" method="POST" style="display: none;">
                <input type="hidden" name="_token" value="gPujS8ybXSMDgYtEobiJKdzn8BbdxHY36sULzU9n">            </form>
            <div class="wrapper ">
  <div class="sidebar" data-color="orange" data-background-color="white" data-image="https://material-dashboard-laravel.creative-tim.com/material/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="#" class="simple-text logo-normal">
    <img src="{{ url('img/logonf.png') }}" width="80%"/>
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item active">
        <a class="nav-link" href="https://material-dashboard-laravel.creative-tim.com/home">
          <i class="material-icons">dashboard</i>
            <p>Menu</p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('home') }}">
          <i class="material-icons">home</i>
            <p>Home</p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('about') }}">
          <i class="material-icons">face</i>
            <p>About Me</p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('gallery') }}">
          <i class="material-icons">bubble_chart</i>
          <p>Gallery</p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('contact') }}">
          <i class="material-icons">location_ons</i>
            <p>Contact Me</p>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
        <i class="material-icons">notes</i>
        <p>Master Data
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('buku') }}">
                <i class="material-icons">notes</i>
                <span class="sidebar-normal">Buku</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('pengarang') }}">
                <i class="material-icons">notes</i>
                <span class="sidebar-normal">Pengarang</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('penerbit') }}">
                <span class="sidebar-mini"> PB </span>
                <span class="sidebar-normal"> Penerbit </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('kategori') }}">
                <span class="sidebar-mini"> KT </span>
                <span class="sidebar-normal"> Kategori </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      
      
      
    </ul>
  </div>
</div>