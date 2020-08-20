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
        <div class="col-md-4 col-sm-4 col-xs-12">

            <div class="ConHeadings">
              <h1>{{$cms_home10->name}}<span>.</span></h1>
            </div>
           <?=html_entity_decode($cms_home10->content)?> 


        </div>

        <div class="col-md-4 col-sm-4 col-xs-12">

            <div class="ConHeadings">
              <h1>{{$cms_home11->name}}<span>.</span></h1>
            </div>
            <?=html_entity_decode($cms_home11->content)?> 


        </div>

        <div class="col-md-4 col-sm-4 col-xs-12">

            <div class="ConHeadings">
              <h1>{{$cms_home12->name}}<span>.</span></h1>
            </div>
           <?=html_entity_decode($cms_home12->content)?> 

        </div>
      </div>
    </div>
  </section>
<section class="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="ConHeadings">
              <h1>Ask Your Questions<span>.</span></h1>
            </div>
            <form action="{{route('contactUsSubmit')}}" method="post">
                {{ csrf_field() }}
              <div class="form-group">
                <input class="form-control" name="inquiries_fname" type="text" placeholder="Name" required="">
              </div>
              <div class="form-group">
                <input class="form-control" name="inquiries_email" type="email" placeholder="Email"  required="">
              </div>
              <div class="form-group">
                <input class="form-control" name="inquiries_phone" type="number" placeholder="Phone Number"  required="">
              </div>
               <div class="form-group">
                <input class="form-control" name="subject" type="text" placeholder="Subject"  required="">
              </div>
              <div class="form-group">
                <textarea class="form-control" name="extra_content" rows="6" placeholder="Your Message"  required=""></textarea>
              </div>
              <div class="form-group">
                <button class="btn btn-primary" type="submit">SEND NOW</button>
              </div>
            </form>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="ConHeadings">
              <?=html_entity_decode($cms_home13->content)?> 
            </div>
            <div class="Contxt">
                <div class="cntct-one">
                  <img src="{{asset('images/cal.jpg')}}" class="img-responsive" alt="">
                  <div class="cntct-txt">
                  <a href="mailto:{{ App\Http\Traits\HelperTrait::returnFlag(218) }}">Email :{{ App\Http\Traits\HelperTrait::returnFlag(218) }}</a></p>
                </div>
                </div>
                <div class="cntct-one">
                  <img src="{{asset('images/calcntct.jpg')}}" class="img-responsive" alt="">
                  <div class="cntct-txt">
                  <p><a href="tel:{{ App\Http\Traits\HelperTrait::returnFlag(59) }}">Toll Free :{{ App\Http\Traits\HelperTrait::returnFlag(59) }}</p>
                </div>
                </div>
          <iframe allowfullscreen="" frameborder="0" height="272" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3015.4837473490684!2d-74.10559168522028!3d40.90513803371527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2fbe9809b8f7d%3A0xc6f95b1920b6dda3!2sPark+80+West!5e0!3m2!1sen!2s!4v1552398581397" style="border:0" width="100%"></iframe>
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

