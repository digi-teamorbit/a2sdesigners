
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

<section class="main-blgsec main-blgpage">
      <div class="container">
        <div class="row">
          @foreach($blogs as $value)
          <div class="col-md-4 col-xs-12 col-sm-4">
            <div class="blgsec-box">
              <a href="{{ url('/blogDetail/'.$value->id) }}"><img src="{{asset($value->image)}}" class="img-responsive" alt="img"></a> 
              <h2>{{$value->name}}</h2> 
              <p> {{$value->short_detail}}</p>
              <span class="pull-left"><i class="fa fa-calendar" aria-hidden="true"></i> {{date('d-M-Y', strtotime($value->created_at))}}</span>   
              <span class="pull-right"><i class="fa fa-clock-o" aria-hidden="true"></i>{{date('d-M-Y', strtotime($value->created_at))}}</span>
            </div>
          </div>
          @endforeach    
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
