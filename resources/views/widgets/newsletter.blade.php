<section class="main-newsltr">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-xs-12 col-sm-12">
            <div class="newsltr-box">
              <form action="{{route('newsletterSubmit')}}" method="post">
                {{ csrf_field() }}
                <div class="row">
          <div class="col-md-6 col-xs-12 col-sm-6">
            <div class="newsltr-txt">
              <h2>Newsletter</h2>
              <p>Subscribe Us To Get Our Lastest Updates</p>
            </div>
          </div>
          <div class="col-md-6 col-xs-12 col-sm-6">
            <div class="newsltr-inpt">
              <input type="text" name="newsletter_email" placeholder="Enter your email" required="" >
              <button type="submit" class="newsltr-inpt">Subscribe Now</button>
            </div>
          </div>
          </div></form>
        
        </div>
        </div>
        </div>
      </div>
    </section>

