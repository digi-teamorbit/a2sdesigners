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
          <img src="{{asset($blogDetail->image)}}" class="img-responsive" alt="img">
         <!-- <h2>{{$blogDetail->name}} <span class="dt">.</span></h2>-->
        <span class="pull-left">{{date('d-M-Y', strtotime($blogDetail->created_at))}}</span>
        <span class="pull-right"><i class="fa fa-eye" aria-hidden="true"></i>{{date('d-M-Y', strtotime($blogDetail->created_at))}}</span>   
        <div class="clearfix"></div>
        <h2>{{$blogDetail->short_detail}}</h2> 
        <?= html_entity_decode($blogDetail->detail) ?>
        </div>
      </div>
      <div class="col-md-3 col-xs-12 col-sm-3">
        <div class="main-srch">
          <div class="srch-txt">
            <form>
                <h2>SEARCH</h2>
            <span>
            <input type="text" name="q" placeholder="Search">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </span>
            </form>
          </div>  

          <div class="rxnt-pst">
            <h2>RECENT POST</h2>
          </div>
          @foreach($blogs as $value)
          <div class="rxnt-img">
            <img src="{{asset($value->image)}}" class="img-responsive" alt="img">
            <h2> {{date('d-M-Y', strtotime($value->created_at))}}<h2>
           <?= html_entity_decode($value->short_detail) ?>
          </div>
          @endforeach
          
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
    