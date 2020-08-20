@extends('layouts.main')
@section('content')

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
  
<section class="main-prjctdtl">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-xs-12 col-sm-9">
        <div class="prjctdtl-txt">
          <img src="{{asset($projectDel->image)}}" class="img-responsive" alt="img">
        <?=html_entity_decode($projectDel->short_details)?>   
        <span class="pull-left">{{date('d-M-Y', strtotime($projectDel->created_at))}}</span>
        <span class="pull-right"><i class="fa fa-eye" aria-hidden="true"></i>{{date('d-M-Y', strtotime($projectDel->created_at))}}</span>
        <div class="clearfix"></div>
       <?= html_entity_decode($projectDel->details) ?>
        </div>  
      </div>
      <div class="col-md-3 col-xs-12 col-sm-3">
        <div class="main-srch">
          <div class="srch-txt">
            <form>
              <h2>SEARCH</h2>
            <span>
            <input name="q" type="text"  placeholder="Search">
            <button type="submit" class="btn btn-danger">Search</button>
            </form>
          </div>  
          <div class="rxnt-pst">
            <h2>RECENT POST</h2>
          </div>
          @foreach($project as $value)
          <div class="rxnt-img">
            <img src="{{asset($value->image)}}" class="img-responsive" alt="img">
          <h2> {{date('d-M-Y', strtotime($value->created_at))}}<h2>
            {{$value->name}}
       <?=html_entity_decode($value->short_details)?> 
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
<section class="main-videosec">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-xs-12 col-sm-12">
            <a data-fancybox="" href="{{ $projectDel->video }}"><img src="{{asset('images/play.png')}}" class="img-responsive" alt="img"></a>
          </div>
        </div>
      </div>
    </section>
<section class="main-prjctdtlpg">
  <div class="container">
    <div class="desgnprjct-head">
          <h2>Project Tour<span>.</span></h2>
        </div>
    <div class="row">
      @foreach( $projectTour as $value)
      <div class="col-md-3 col-xs-12 col-sm-3">
        <div class="confor_dev">
                    <a data-fancybox="gallery" href="{{asset('images/img2.jpg')}}g">
                    <div class="item-screenshots">
                    <div class="preview-container">
                      <div class="button-preview icon-circle">
                        <div class="preview" rel="group">
                          <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                          <span>Full Screen</span>
                        </div>
                      </div>
                    </div><img alt="" class="img-responsive" src="{{asset($value->image)}}"><div class="bed-one">
                       <a href="{{url('project')}}">{{$value->name}} <span>.</span></a>
                    </div></div></a>
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