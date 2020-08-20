@extends('layouts.main')
@section('content')
  
<!-- NAVBAR
================================================== -->
    <section class="banner" style="
    background: url({{asset($innerbanner->image)}}) no-repeat top center/ cover;
">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-xs-12 col-sm-12">
            <?=html_entity_decode($innerbanner->name)?> 
          </div>
        </div>
      </div>
    </section>
    
<section class="main-prjctpag">
  <div class="container">
    <div class="desgnprjct-head">
           <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">All</a></li>
            <?php $counter=0; ?>
            @foreach($category as $value)
    <li role="presentation" class="{{ $counter == 0  }} 
 ? 'active' : ''"><a href="#project{{$counter}}"aria-controls="home" role="tab" data-toggle="tab">{{$value->name}}</a></li>
      <?php $counter++;  ?>
    @endforeach
  </ul>
        </div>
    <div class="row">
 <div class="eht-slider">
      <div id="carousel-example-generic927" class="carousel slide" data-ride="carousel">
       
  <div class="carousel-inner" role="listbox">
     @foreach ($project as $arr)

          <div class="item active">
            <div class="tab-content">
 <?php $counterr=0; ?>
    <div role="tabpanel" class="tab-pane fade in active" id="project{{$counterr}}">
     @foreach ($arr as $value)
           <div class="col-md-3">
            <div class="confor_dev">
                    <a data-fancybox="gallery" href="{{asset($value->image)}}">
                    <div class="item-screenshots">
                    <div class="preview-container">
                      <div class="button-preview icon-circle">
                        <div class="preview" rel="group">
                          <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                          <span>test</span>
                        </div>
                      </div>
                    </div><img alt="" class="img-responsive" src="{{asset($value->image)}}">
                  <div class="bed-one">
                       <a href="{{url('/projectdetails/'.$value->id)}}">{{$value->name}} <span>.</span></a>
                    </div>
                  </div></a>
                    
                  </div>
          </div>
        <?php $counterr++;  ?>
          @endforeach
 </div>
</div>
</div>
@endforeach
</div>


        <a class="left carousel-control" href="#carousel-example-generic927" role="button" data-slide="prev">
        <img src="{{asset('owl-carousel/arrow-left.png')}}" class="img-responsive" alt="img">
        <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic927" role="button" data-slide="next">
        <img src="{{asset('owl-carousel/arrow-right.png')}}" class="img-responsive" alt="img">
        <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
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