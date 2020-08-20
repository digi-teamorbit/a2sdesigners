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
        <div class="">
            <div class="col-md-12 col-xs-12 col-sm-12 text-center">
        <?=html_entity_decode($cms_home9->content)?> 
            </div>
            @foreach($teams as $team)
            <div class="col-md-3 col-sm-3 col-xs-12">
              <div class="teamBox text-center">
                <img src="{{asset($team->image)}}" alt="img"/>
                <h4>{{$team->name}}</h4>
                <h4>{{$team->designation}}</h4>
              </div>
            </div>
            @endforeach

 </div>
 </div>
</div>
 <div class="clearfix"></div>
</div>
 </div>
</section>
@include('widgets.newsletter')  
@endsection
@section('css')
<style>
.teamBox {
    margin: 30px 0 0;
    min-height: 350px;
}
</style>
@endsection

@section('js')
<script type="text/javascript"></script>
@endsection


    <!-- Begin: FOOTER -->
    
    <!-- END Footer -->
    

    <!-- <section>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-xs-12 col-sm-4"></div>
          <div class="col-md-4 col-xs-12 col-sm-4"></div>
          <div class="col-md-4 col-xs-12 col-sm-4"></div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-xs-12 col-sm-3"></div>
          <div class="col-md-3 col-xs-12 col-sm-3"></div>
          <div class="col-md-3 col-xs-12 col-sm-3"></div>
          <div class="col-md-3 col-xs-12 col-sm-3"></div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-xs-12 col-sm-6"></div>
          <div class="col-md-6 col-xs-12 col-sm-6"></div>
        </div>
      </div>
    </section> -->

    


    <!-- Placed at the end of the document so the pages load faster -->
