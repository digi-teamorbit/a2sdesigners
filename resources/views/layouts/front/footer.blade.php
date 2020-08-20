<footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-xs-12 col-sm-3">
            <div class="ftr-logo">
              <a href="index.html"><img src="{{asset($logo->img_path)}}" class="img-responsive" alt="img"></a>
              <p>A2S has a decade worth of experience in using innovation, beauty and science together to bring the most stunning designs to life. </p>
            </div>
          </div>
          <div class="col-md-offset-1 col-md-2 col-xs-12 col-sm-3">
            <div class="ftr-lst">
              <h2>Quick Link</h2>
              <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('#')}}">Articles</a></li>
                <li><a href="{{url('#')}}">Guides</a></li>
                <li><a href="{{url('contact')}}">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-xs-12 col-sm-3">
            <div class="ftr-lst">
              <h2>Information</h2>
              <ul>
                <li><a href="{{url('#')}}">Help Center</a></li>
                <li><a href="{{url('policy')}}">Privacy Policy</a></li>
                <li><a href="{{url('policy')}}">Payment Policy</a></li>
                <li><a href="{{url('policy')}}">Terms of Use</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-xs-12 col-sm-3">
            <div class="ftr-lst">
              <h2>Contact Us</h2>
            </div>
            <div class="ftr-cl">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <div class="ftr-cltxt">
                <p><a href="tel:{{ App\Http\Traits\HelperTrait::returnFlag(59) }}">{{ App\Http\Traits\HelperTrait::returnFlag(59) }}</p>
              </div>
            </div>
            <div class="ftr-cl">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <div class="ftr-cltxt">
                 <a href="mailto:{{ App\Http\Traits\HelperTrait::returnFlag(218) }}">{{ App\Http\Traits\HelperTrait::returnFlag(218) }}</a></p>
              </div>
            </div>
            <div class="ftr-cl">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <div class="ftr-cltxt">
    <p><a href="tel:{{ App\Http\Traits\HelperTrait::returnFlag(519) }}">{{ App\Http\Traits\HelperTrait::returnFlag(519) }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrght">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-xs-12 col-sm-6">
              <div class="cpyrght-txt">
                <p>&copy; 2010 A2S Designers. All Rights reserved by 4AM Group</p>
              </div>
            </div>
            <div class="col-md-6 col-xs-12 col-sm-6">
              <div class="cpy-socl">
                <a href="{{ App\Http\Traits\HelperTrait::returnFlag(1960) }}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="{{ App\Http\Traits\HelperTrait::returnFlag(1967) }}" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                <a href="{{ App\Http\Traits\HelperTrait::returnFlag(682) }}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>