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
    <section>
      <div class="container">
        <div>
         <?=html_entity_decode($cms_home14->content)?> 
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

