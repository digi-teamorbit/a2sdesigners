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
    <section class="main-abtsec main-abtwo">
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

                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="main-abtsec main-abtwo">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-xs-12 col-sm-6">
            <div class="secnd-slider">
            <div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="slide-txt">
                      <?=html_entity_decode($cms_home3->content)?> 

                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xs-12 col-sm-6">
            <div class="abtsec-img">
              <span><img src="{{asset($cms_home3->image)}}" class="img-responsive" alt="img"></span>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <section class="main-latstptojct main-abtpgltst">
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
            <div class="fourth-slider">
        <div id="carousel-example-generic985" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="slide-txt">
              <?=html_entity_decode($cms_home4->content)?> 
              <a href="{{url('project')}}">Read More</a>
          </div>
          </div>
        </div>
      </div>
    </div>
</div>
 </div>
</div>
    </section>
      @include('widgets.newsletter') 
    <!-- Begin: FOOTER -->
    @endsection
@section('css')
<style>

</style>
@endsection

@section('js')
<script type="text/javascript"></script>
@endsection

