<?php $segment = Request::segments();?>

<header>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-xs-12 col-sm-3">
          <div class="logo">
            <a href="{{url('/')}}"><img src="{{asset($logo->img_path)}}" class="img-responsive" alt="img"></a>
          </div>
        </div>
        <div class="col-md-9 col-xs-12 col-sm-9">
          <div class="toggleButton">
      <nav class="menu-opener">
        <div class="menu-opener-inner"></div>
      </nav>
      <nav class="menu">
        <ul id="myMenu">
          <li class="{{Request::path()=='/'? 'hidden-xs active':''}}"><a href="{{url('/')}}" >Home</a></li>
            <li class="{{Request::path()=='about'? 'hidden-xs active ':''}}"><a href="{{url('about')}}" >About Us</a></li>
            <li class="{{Request::path()=='whyChooseUs'? 'hidden-xs active':''}}"><a href="{{url('whyChooseUs')}}" >Why Choose Us</a></li>
           <li class="{{Request::path()=='project'? 'hidden-xs active ':''}}"><a href="{{url('project')}}" >Projects</a></li>
            <li class="{{Request::path()=='blog'? 'hidden-xs active':''}}"><a href="{{url('blog')}}" >Blogs</a></li>
            <li class="{{Request::path()=='clients'? 'hidden-xs active':''}}"><a href="{{url('clients')}}" >Clients</a></li>
            <li class="{{Request::path()=='career'? 'hidden-xs active':''}}"><a href="{{url('career')}}" >Careers</a></li>
            <li class="{{Request::path()=='team'? 'hidden-xs active':''}}"><a href="{{url('team')}}" >Team</a></li>
            <li class="{{Request::path()=='contact'? 'hidden-xs active':''}}"><a href="{{url('contact')}}" >Contact Us</a></li>
        </ul>
          </nav>
    </div>
        </div>
      </div>
    </div>
    </header>
