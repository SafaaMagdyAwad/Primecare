 <!-- info section -->

 <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="info_contact">
            <h5>
              Address
            </h5>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
          <div class="info_social">
            <a href="">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
            <a href="">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="info_link_box">
            <h5>
              Navigation
            </h5>
            <div class="info_links">
              <a class="active" href="{{route('index')}}"> <i class="fa fa-angle-right" aria-hidden="true"></i> Home </a>
              <a class="" href="{{route('about')}}"> <i class="fa fa-angle-right" aria-hidden="true"></i> About</a>
              <a class="" href="{{route('why')}}"> <i class="fa fa-angle-right" aria-hidden="true"></i> Why Us </a>
              <a class="" href="{{route('team')}}"> <i class="fa fa-angle-right" aria-hidden="true"></i> Our Team</a>
              <a class="" href="{{route('testimonial')}}"> <i class="fa fa-angle-right" aria-hidden="true"></i> Testimonial</a>
              <a class="" href="{{route('contact')}}"> <i class="fa fa-angle-right" aria-hidden="true"></i> Contact Us</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <h5>
            Newsletter
          </h5>
          <form action="{{route('subscribe')}}" method="POST">
            @csrf
            <input type="text" placeholder="Enter Your email" name="email" />
            <button type="submit">
              Subscribe
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->