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
    
<section class="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="ConHeadings text-center">
              <?=html_entity_decode($cms_home7->content)?> 
            </div>
            <form action="{{ route('Careers') }}" method="post">
              {{ csrf_field() }}
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label>Name</label>
                  <input class="form-control" name="name" type="text"  placeholder="Enter Your Full Name">
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label>Current Job Title</label>
                  <input class="form-control" name="designation" type="text"  placeholder="Designation">
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label>Contact Number</label>
                  <input class="form-control" name="phone" type="Number" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="Your Number">
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label>Email Address</label>
                  <input class="form-control" name="email" type="email" placeholder="Enter email">
                </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Personal Statement</label>
                  <textarea class="form-control"  name="message" rows="6" placeholder="Message"></textarea>
                </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label>Attach Your File</label>
                  <input type="file" id="myfile" name="file">
                  <p>We'll never share your email with anyone else.</p>
                </div>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="form-group">
                  <button class="btn btn-primary" type="submit">SEND NOW</button>
                </div>
              </div>
            </form>
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

 