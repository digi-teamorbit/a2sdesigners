<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\WhyChooseU;
use Illuminate\Http\Request;
use Image;
use File;

class WhyChooseUsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */

    public function index(Request $request)
    {
        $model = str_slug('whychooseus','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $whychooseus = WhyChooseU::where('name', 'LIKE', "%$keyword%")
                ->orWhere('detail', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $whychooseus = WhyChooseU::paginate($perPage);
            }

            return view('admin.why-choose-us.index', compact('whychooseus'));
        }
        return response(view('403'), 403);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $model = str_slug('whychooseus','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            return view('admin.why-choose-us.create');
        }
        return response(view('403'), 403);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $model = str_slug('whychooseus','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            $this->validate($request, [
			'name' => 'required'
		]);

            $whychooseus = new WhyChooseU($request->all());

            if ($request->hasFile('image')) {

                $file = $request->file('image');
                
                //make sure yo have image folder inside your public
                $whychooseus_path = 'uploads/whychooseuss/';
                $fileName = $file->getClientOriginalName();
                $profileImage = date("Ymd").$fileName.".".$file->getClientOriginalExtension();

                Image::make($file)->save(public_path($whychooseus_path) . DIRECTORY_SEPARATOR. $profileImage);

                $whychooseus->image = $whychooseus_path.$profileImage;
            }
            
            $whychooseus->save();

            return redirect('admin/why-choose-us')->with('flash_message', 'WhyChooseU added!');
        }
        return response(view('403'), 403);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $model = str_slug('whychooseus','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $whychooseu = WhyChooseU::findOrFail($id);
            return view('admin.why-choose-us.show', compact('whychooseu'));
        }
        return response(view('403'), 403);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $model = str_slug('whychooseus','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $whychooseu = WhyChooseU::findOrFail($id);
            return view('admin.why-choose-us.edit', compact('whychooseu'));
        }
        return response(view('403'), 403);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $model = str_slug('whychooseus','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $this->validate($request, [
			'name' => 'required'
		]);
            $requestData = $request->all();
            

        if ($request->hasFile('image')) {
            
            $whychooseus = whychooseus::where('id', $id)->first();
            $image_path = public_path($whychooseus->image); 
            
            if(File::exists($image_path)) {
                File::delete($image_path);
            }

            $file = $request->file('image');
            $fileNameExt = $request->file('image')->getClientOriginalName();
            $fileNameForm = str_replace(' ', '_', $fileNameExt);
            $fileName = pathinfo($fileNameForm, PATHINFO_FILENAME);
            $fileExt = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            $pathToStore = public_path('uploads/whychooseuss/');
            Image::make($file)->save($pathToStore . DIRECTORY_SEPARATOR. $fileNameToStore);

             $requestData['image'] = 'uploads/whychooseuss/'.$fileNameToStore;               
        }


            $whychooseu = WhyChooseU::findOrFail($id);
             $whychooseu->update($requestData);

             return redirect('admin/why-choose-us')->with('flash_message', 'WhyChooseU updated!');
        }
        return response(view('403'), 403);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $model = str_slug('whychooseus','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            WhyChooseU::destroy($id);

            return redirect('admin/why-choose-us')->with('flash_message', 'WhyChooseU deleted!');
        }
        return response(view('403'), 403);

    }
}
