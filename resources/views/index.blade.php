@extends('layouts.main')
@section('content')
     <!-- Begin: Crousel -->
   <div class="main-slider">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <?php $counter=0; ?>
  <div class="carousel-inner">
  @if($banner)
  @foreach($banner as $value)
    <div class="item {{ $counter == 0 ? 'active' : '' }}">
      <div class="SlideBigimg">
        <img src="{{ asset($value->image) }}" class="img-responsive">
      </div>
      <div class="carousel-caption">
        <div class="container">
           <div class="row">
            <div class="col-md-6">
       <div class="slide-txt">
        <div class="SliderText wow zoomIn">
        <?= html_entity_decode($value->description) ?>
        <a href="{{ url('contact') }}" class="redbtn">Contact Us</a>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
  <?php $counter++;  ?>
  @endforeach
  @endif
</div>          
        </div>   
      </div>
    </div>
    <!-- END: Crousel -->


    <section class="main-abtsec">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-xs-12 col-sm-6">
            <div class="abtsec-img">
              <span><img src="{{asset($cms_home2->image)}}" class="img-responsive" alt="img"></span>
            </div>
          </div>
          <div class="col-md-6 col-xs-12 col-sm-6">
            <div class="secnd-slider">
            <div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="slide-txt">
                       <?=html_entity_decode($cms_home2->content)?> 
                      <a href="{{url('about')}}">Read More</a>
                    </div>
                  </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="main-desgnprjct">
      <div class="container">
        <div class="desgnprjct-head">
         <?=html_entity_decode($cms_home5->content)?> 
           <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">All</a></li>
            @foreach($category as $value)
    <li role="presentation" class="active"><a href="{{('url('/project/'.$value->id')}}" aria-controls="home" role="tab" data-toggle="tab">{{$value->name}}</a></li>
    @endforeach
  
  </ul>
        </div>
        <div class="row">
           <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="home">
      <div class="owlCarousel">
        @foreach( $project as $value)
          <div class="col-md-3">
            <div class="confor_dev">
                    <a data-fancybox="gallery" href="{{asset('images/img2.jpg')}}">
                    <div class="item-screenshots">
                    <div class="preview-container">
                      <div class="button-preview icon-circle">
                        <div class="preview" rel="group">
                          
                          <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                          <span>Full Screen</span>
                        </div>
                      </div>
                    </div><img alt="" class="img-responsive" src="{{asset($value->image)}}"><div class="bed-one">
                       <a href="{{url('/projectdetails/'.$value->id)}}">{{$value->name}} <span>.</span></a>
                    </div></div></a>
                  </div>
          </div>
          @endforeach
</div>
</div>
</div>
</div>
</div>
    </section>
    <section class="main-videosec">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-xs-12 col-sm-12">
            <a data-fancybox="" href="https://www.youtube.com/watch?v=cKjdTA91xPQ&amp;feature=youtu.be"><img src="{{asset('images/play.png')}}" class="img-responsive" alt="img"></a>
          </div>
        </div>
      </div>
    </section>
    <section class="main-latstptojct">
      
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-6 col-xs-12 col-sm-6 nopadding">
                  @foreach ($projectDel as $arr)
            <div class="row">
      @foreach ($arr as $value)
              <div class="col-md-6 col-xs-12 col-sm-6 nopadding">
                <div class="latst-box">
                <div class="confor_dev">
                    <a data-fancybox="gallery" href="{{asset($value->image)}}">
                    <div class="item-screenshots">

                    <div class="preview-container">
                      <div class="button-preview icon-circle">
                        <div class="preview" rel="group">
                          <i aria-hidden="true" class="fa fa-search-plus"></i>
                        </div>
                        
                        <div class="ply-icn">
                          <a data-fancybox="" href="{{ $value->video }}"><i aria-hidden="true" class="fa fa-play"></i></a>
                        </div>
                      </div>
                    </div><img alt="" class="img-responsive" src="{{asset($value->image)}}"></div></a>
                  </div>
                  </div>
              </div>
                      @endforeach
            </div>
            
                   @endforeach
          </div>

          <div class="col-md-6 col-xs-12 col-sm-6">
            <div class="slide-txt">
              <?=html_entity_decode($cms_home4->content)?> 
                      
                      <a href="{{url('project')}}">Read More</a>
                    </div>
          </div>
        </div>
      </div>
    </section>


    <section class="main-blgsec">
      <div class="container">


        <div class="row">
            @foreach($blogs as $value)
            <div class="col-md-4 col-xs-12 col-sm-4">
            <div class="blgsec-box">
              <a href="{{ url('/blogDetail/'.$value->id) }}"><img src="{{asset($value->image)}}" class="img-responsive" alt="img"></a>
              <h2>{{$value->name}}</h2>
               <p> {{$value->short_detail}}</p>
              <span class="pull-left"><i class="fa fa-calendar" aria-hidden="true"></i>{{date('d-M-Y', strtotime($value->created_at))}}</span>
             <!-- <span class="pull-right"><i class="fa fa-clock-o" aria-hidden="true"></i>03 min ago</span>-->
            </div>
          </div>
          @endforeach
          
          
        </div>
      </div>
    </section>
@include('widgets.newsletter')
@endsection
@section('css')
<style>
</style>
@endsection
@section('js')
<script type="text/javascript"></script>
@endsection