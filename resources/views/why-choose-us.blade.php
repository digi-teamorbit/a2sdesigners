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

          <div class="col-md-12 col-xs-12 col-sm-12 text-center">
            <?=html_entity_decode($cms_home6->content)?>
            <div class="panel-group text-left" id="accordion" role="tablist" aria-multiselectable="true">
   @foreach($WCU as $key=> $value)               
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne{{$key}}" aria-expanded="true" aria-controls="collapseOne{{$key}}">
          {{$value->name}}
        </a>
      </h4>
    </div>
    <div id="collapseOne{{$key}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
      <?=html_entity_decode($value->detail)?> 
      </div>
    </div>
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