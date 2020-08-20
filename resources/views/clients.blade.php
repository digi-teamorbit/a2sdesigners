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
        <div class="col-md-12 col-xs-12 col-sm-12">
         <div class="secnd-slider">
            <div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <div class="slide-txt clientslist">
                   <?=html_entity_decode($cms_home8->content)?> 
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
@endsection
@section('css')
<style>
</style>
@endsection
@section('js')
<script type="text/javascript"></script>
@endsection

    

 