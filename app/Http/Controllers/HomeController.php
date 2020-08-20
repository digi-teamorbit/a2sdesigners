<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inquiry;
use App\schedule;
use App\newsletter;
use App\Career;
use App\post;
use App\banner;
use App\project;
use App\imagetable;
use DB;
use Mail;use View;
use Session;
use App\Http\Helpers\UserSystemInfoHelper;
use App\Http\Traits\HelperTrait;
use Auth;
use App\Profile;


class HomeController extends Controller
{   
    use HelperTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     // use Helper;
     
    public function __construct()
    {
        //$this->middleware('auth');

        $logo = imagetable::
                     select('img_path')
                     ->where('table_name','=','logo')
                     ->first();
             
        $favicon = imagetable::
                     select('img_path')
                     ->where('table_name','=','favicon')
                     ->first(); 
        
        View()->share('logo',$logo);
        View()->share('favicon',$favicon);

    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $banner = DB::table('banners')->get(); 

        
        $cms_home1 = DB::table('pages')->where('id', 1)->first();
        $cms_home2 = DB::table('pages')->where('id', 2)->first();
        $cms_home5 = DB::table('pages')->where('id', 5)->first();
        $cms_home4 = DB::table('pages')->where('id', 4)->first();
        $category = DB::table('categories')->get();
        $blogs = DB::table('blogs')->get()->take(3);
        $project = DB::table('projects')->get()->take(5);
        $projectDel = DB::table('projects')->limit(2)->get()->toArray();
        $projectDel = array_chunk($projectDel, 2);


        return view('index', compact('banner', 'cms_home1','cms_home2','cms_home3','cms_home4','blogs','cms_home5','project','projectDel','category'));
    }
    

    public function contactUsSubmit(Request $request)
     {

         $this->validate($request, [
            'inquiries_fname' => 'required',
            'inquiries_email' => 'required',
            'extra_content' => 'required'
            
        ]);
        $inquiry = new inquiry;
        $inquiry->inquiries_fname = $request->inquiries_fname;
        $inquiry->inquiries_email = $request->inquiries_email;
        $inquiry->subject = $request->subject;
        $inquiry->inquiries_phone = $request->inquiries_phone;
        $inquiry->extra_content = $request->extra_content;
       
        $inquiry->save();
        Session::flash('message', 'Thank you for contacting us. We will get back to you asap'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect('contact');
}

    public function newsletterSubmit(Request $request)
    {

        $is_email = newsletter::where('newsletter_email',$request->newsletter_email)->count();
        
        if($is_email == 0) {
            
        $newsletter = new newsletter;
        //$inquiry->newsletter_name = $request->name;
        $newsletter->newsletter_email = $request->newsletter_email;


        //$inquiry->newsletter_message = $request->comment;
        $newsletter->save();
               Session::flash('message', 'Thank you for contacting us. We will get back to you asap'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect('/');
        
        } else {
            Session::flash('flash_message', 'email already exists'); 
            Session::flash('alert-class', 'alert-success'); 
            return redirect('/');
        }
        
    }
    public function about(){
       $innerbanner = DB::table('innerbanners')->where('id',1)->first();
        $cms_home2 = DB::table('pages')->where('id', 2)->first();
         $cms_home3 = DB::table('pages')->where('id', 3)->first();
         $cms_home4 = DB::table('pages')->where('id', 4)->first();
         $projectDel = DB::table('projects')->limit(2)->get()->toArray();
         $projectDel = array_chunk($projectDel, 2);

        return view('about',compact('cms_home2','cms_home3','cms_home4','projectDel','innerbanner'));
    }
  public function blog(){
    $innerbanner = DB::table('innerbanners')->where('id',4)->first();
   $blogs = DB::table('blogs')->get();
        return view('blog',compact('blogs','innerbanner'));
    }
    public function blogDetail($id){
       if(isset($_GET['q']) && $_GET['q'] != '') {

$keyword = $_GET['q'];


$blogs = DB::table('blogs')
                ->where('short_detail', 'like', '%'.$keyword.'%')
                ->get()->take(2);
                
}
       else{
          $blogs = DB::table('blogs')->get()->take(2);
        }

      $innerbanner = DB::table('innerbanners')->where('id',5)->first();
      $blogDetail = DB::table('blogs')->where('id', $id)->first();
      
        return view('blogDetail',compact('blogDetail','blogs','innerbanner'));
    }
    public function careers (Request $request){
         $this->validate($request, [
            'name' => 'required',
            'designation' => 'required',
            'phone' => 'required'
            
        ]);
        $careers = new Career;
        $careers->name  = $request->name;
        $careers->designation = $request->designation;
        $careers->phone = $request->phone;
        $careers->email = $request->email;
        $careers->message = $request->message;
        $careers->file = $request->file;
       
        $careers->save();
       Session::flash('message', 'Thank you for contacting us. We will get back to you asap'); 
      Session::flash('alert-class', 'alert-success'); 
        return redirect('/');
        
    }

      public function clients(){
        $innerbanner = DB::table('innerbanners')->where('id',6)->first();
        $cms_home8 = DB::table('pages')->where('id', 8)->first();
        return view('clients',compact('cms_home8','innerbanner'));
    }
    public function contact(){
      $cms_home10 = DB::table('pages')->where('id', 10)->first();
      $cms_home11 = DB::table('pages')->where('id', 11)->first();
       $cms_home12 = DB::table('pages')->where('id', 12)->first();
       $cms_home13 = DB::table('pages')->where('id', 13)->first();
     $innerbanner = DB::table('innerbanners')->where('id',9)->first();
        return view('contact',compact('innerbanner','cms_home10','cms_home11','cms_home12','cms_home13'));
    }

      public function projectdetails($id){
               if(isset($_GET['q']) && $_GET['q'] != '') {

$keyword = $_GET['q'];

$project = DB::table('projects')
                ->where('short_details', 'like', '%'.$keyword.'%')
                ->get()->take(2);
                
}
 else{
        $project = DB::table('projects')->get()->take(2);
        }

        $innerbanner = DB::table('innerbanners')->where('id',1)->first();

        $projectDel = DB::table('projects')->where('id', $id)->first();
        $projectTour = DB::table('projects')->get()->take(4);
        return view('projectdetails',compact('projectDel','project','projectTour','banner'));
    }
    public function project(){
     $innerbanner = DB::table('innerbanners')->where('id',3)->first();
       $project = DB::table('projects')->get()->toArray();
       $project = array_chunk($project, 4);

       $category = DB::table('categories')->get();
        return view('project',compact('project','category','innerbanner'));
    }
    public function team(){
      $innerbanner = DB::table('innerbanners')->where('id',8)->first();
       $cms_home9 = DB::table('pages')->where('id', 9)->first();
       $teams = DB::table('teams')->get();
        return view('team',compact('teams','cms_home9','innerbanner'));
    }
   
    public function whychooseus(){
     $innerbanner = DB::table('innerbanners')->where('id',2)->first();

      $WCU = DB::table('why_choose_uses')->get();
      $cms_home6 = DB::table('pages')->where('id', 6)->first();
        return view('why-choose-us',compact('WCU','cms_home6','innerbanner'));
    }
     public function career(){
      $innerbanner = DB::table('innerbanners')->where('id',7)->first();
      $cms_home7 = DB::table('pages')->where('id', 7)->first();
        return view('careers',compact('cms_home7','innerbanner'));
    }

    public function category($id){
      $category = DB::table('categories')->where('id', $id)->first();
      return view('category');

    }
    public function policy(){
      $innerbanner = DB::table('innerbanners')->where('id',10)->first();
      $cms_home14 = DB::table('pages')->where('id', 14)->first();
      return view('policies',compact('innerbanner','cms_home14'));
    }

}
