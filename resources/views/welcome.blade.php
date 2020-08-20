@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
     <?php $counter=0;  ?>
    @foreach($banner as $key => $value)
    <div class="item {{$counter == 0 ? 'active' :''}}"> <img src="{{asset($value->image)}}" alt="img">

      <div class="carousel-caption">
        <div class="container">
          <div class="col-md-6 col-sm-10 col-xs-12 text-left">
        
            <?= html_entity_decode($value->description)?>

            <a data-fancybox="" href="https://www.youtube.com/watch?v=cKjdTA91xPQ&amp;feature=youtu.be" class="videoLink wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="2s"><i class="fa fa-play" aria-hidden="true"></i></a> <a href="{{ url('contact-us') }}" class="btn btn-green wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="2s">Get Started</a> </div>
     
        </div>
      </div>
    </div>
      <?php $counter++;  ?>
    @endforeach
    
  </div>
</div>
<div class="aboutSec">
  <div class="container">
    <div class="col-md-6 col-sm-6 col-xs-12">
      <div class="aboutImg wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="2s"> <img src="{{ asset($cms_home1->image)}}" alt="img"/> </div>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12">
      
      <h2>{{$cms_home1->name}}</h2>
      <?=html_entity_decode($cms_home1->content)?>  
      



      <a href="#" class="btn btn-green">Read More</a> </div>
  </div>
</div>
<div class="videoSec">
  <div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
      
      <h2>Watch <span>Video</span></h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>

      <div class="videoBox wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="2s"> <img src="{{asset('images/video-img.jpg')}}" alt="img"/>
        <div class="videoOverlay"><a data-fancybox="" href="https://www.youtube.com/watch?v=cKjdTA91xPQ&amp;feature=youtu.be" class="videoLink"><i class="fa fa-play" aria-hidden="true"></i></a></div>
    


      </div>
    </div>
  </div>
</div>

<div class="featuredSec">
  <div class="container">

    <div class="col-md-6 col-sm-12 col-xs-12">
      <h2>Featured <span>Courses</span></h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div class="col-md-6 chidden-sm hidden-xs"></div>
    <div class="clearfix"></div>
    <div class="featuredSlider wow zoomIn" data-wow-delay="0.2s" data-wow-duration="2s">
      <div class="col-md-3">
        <div class="featuredBox"> <img src="{{ asset('images/img2.jpg')}}" />
          <div class="overlay">
            <div class="featuredRating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>
            <h6>Lorem ipsum dolor</h6>
            <p>$79.00</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="featuredBox"> <img src="{{ asset('images/img3.jpg')}}" alt="img"/>
          <div class="overlay">
            <div class="featuredRating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>
            <h6>Lorem ipsum dolor</h6>
            <p>$79.00</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="featuredBox"> <img src="{{ asset('images/img4.jpg')}}" alt="img"/>
          <div class="overlay">
            <div class="featuredRating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>
            <h6>Lorem ipsum dolor</h6>
            <p>$79.00</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="featuredBox"> <img src="{{ asset('images/img5.jpg')}}" alt="img"/>
          <div class="overlay">
            <div class="featuredRating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>
            <h6>Lorem ipsum dolor</h6>
            <p>$79.00</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="featuredBox"> <img src="{{ asset('images/img2.jpg')}}" alt="img"/>
          <div class="overlay">
            <div class="featuredRating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>
            <h6>Lorem ipsum dolor</h6>
            <p>$79.00</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="featuredBox"> <img src="{{ asset('images/img3.jpg')}}" alt="img"/>
          <div class="overlay">
            <div class="featuredRating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>
            <h6>Lorem ipsum dolor</h6>
            <p>$79.00</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="featuredBox"> <img src="{{ asset('images/img4.jpg')}}" alt="img"/>
          <div class="overlay">
            <div class="featuredRating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>
            <h6>Lorem ipsum dolor</h6>
            <p>$79.00</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="featuredBox"> <img src="{{ asset('images/img5.jpg')}}" alt="img"/>
          <div class="overlay">
            <div class="featuredRating"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>
            <h6>Lorem ipsum dolor</h6>
            <p>$79.00</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12 text-center"> <a href="{{url('courses')}}" class="btn btn-green">View All</a> </div>
  </div>
</div>
<div class="reviewSec">
  <div class="container">
    
    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
   
      <h2>Client <span>Reviews</span></h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
   
    </div>
    
    <div class="clearfix"></div>
    <div class="reviewSlider wow zoomIn" data-wow-delay="0.2s" data-wow-duration="2s">
      <div class="col-md-4">
        <div class="reviewBox"> <i class="fa fa-quote-left" aria-hidden="true"></i>
          <h6>David A. Little</h6>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="reviewBox"> <i class="fa fa-quote-left" aria-hidden="true"></i>
          <h6>David A. Little</h6>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="reviewBox"> <i class="fa fa-quote-left" aria-hidden="true"></i>
          <h6>David A. Little</h6>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="reviewBox"> <i class="fa fa-quote-left" aria-hidden="true"></i>
          <h6>David A. Little</h6>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="reviewBox"> <i class="fa fa-quote-left" aria-hidden="true"></i>
          <h6>David A. Little</h6>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="reviewBox"> <i class="fa fa-quote-left" aria-hidden="true"></i>
          <h6>David A. Little</h6>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </p>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- ============================================================== -->
<!-- BODY END HERE -->
<!-- ============================================================== -->

@endsection
@section('css')
<style>

</style>
@endsection

@section('js')
<script type="text/javascript"></script>
@endsection