 <!-- header section strats -->
 <header class="header_section">
    <div class="contact_nav_container">
      <div class="container">
        <div class="contact_nav">
          <a href="">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <span>
              Address : Mansura Egypt
            </span>
          </a>
          <a href="">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <span>
              Email : Safaa@gmail.com
            </span>
          </a>
          <a href="">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <span>
              Phone Call : +201067605447
            </span>
          </a>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <div class="custom_menu-btn">
          <button onclick="openNav()">
            <span class="s-1"> </span>
            <span class="s-2"> </span>
            <span class="s-3"> </span>
          </button>
        </div>
        <div id="myNav" class="overlay">
          <div class="menu_btn-style ">
            <button onclick="closeNav()">
              <span class="s-1"> </span>
              <span class="s-2"> </span>
              <span class="s-3"> </span>
            </button>
          </div>
          <div class="overlay-content">
            <a class="" href="{{route('index')}}"> Home </a>
            <a class="" href="{{route('about')}}"> About</a>
            <a class="" href="{{route('why')}}"> Why Us </a>
            <a class="" href="{{route('team')}}"> Our Team</a>
            <a class="" href="{{route('testimonial')}}"> Testimonial</a>
            <a class="" href="{{route('contact')}}"> Contact Us</a>
          </div>
        </div>
        <a class="navbar-brand" href="{{route('index')}}">
          <span>
            PrimeCare
          </span>
        </a>
        <div class="user_option">
          <a href="{{route('login')}}">
            <span>
              Login
            </span>
            <i class="fa fa-user" aria-hidden="true"></i>
          </a>
          <form class="form-inline" action="{{route('search')}}" method="POST">
            @csrf
            <input name="search" >
            <button class="btn  nav_search-btn" type="submit">
              <i class="fa fa-search" aria-hidden="true"></i>
            </button>
          </form>
        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->