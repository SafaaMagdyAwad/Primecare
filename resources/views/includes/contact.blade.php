 <!-- contact section -->

 <section class="contact_section layout_padding-top">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="contact-form">
            <div class="heading_container">
              <h2>
                Get In Touch
              </h2>
            </div>
            <form action="{{route('contact_post')}}" method="POST">
              @csrf
              <input type="text" placeholder="Full name "  name="name"/>
              <div class="top_input">
                <input type="email" placeholder="Email" name="email"/>
                <input type="text" placeholder="Phone Number" name="phone" />
              </div>
              <input type="text" placeholder="Message" class="message_input" name="message" />
              <div class="btn-box">
                <button type="submit">
                  Send
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->