<?php

namespace App\Http\Controllers;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function notice(){
        return view('pages.admins.noticeadd');
    }
    public function noticeAdd(Request $request){
        $this->validate(
            $request,
            [
                'title'=>'required',
                'description'=>'required',
                'image_path'=>'required|mimes:jpg,png,jpeg|max:5048'
              
            ],
            [
                'title.required'=>'Title Required!',
                'description.required'=>'Description Required!',
                'image_path.required'=>'Image Required!'
               
        
            ]
        );
        

        $newImageName = time() . '-' . $request->name . '.' .
        $request->image_path->extension();
        $request->image_path->move(storage_path('images2'),$newImageName);


        $var = new Notice();
        $var->title = $request->title;
        $var->description = $request->description;
        $var->image_path =  $newImageName ; 
        $var->save();    
        return redirect()->route('admin.noticelist');

    }
    
    public function edit(Request $request){
        $id = $request->id;
        $admins = Notice::where('id',$id)->first();
        return view('pages.admins.noticeaddedit')->with('admins', $admins);

    }
    public function editSubmit(Request $request){
        $var = Notice::where('id',$request->id)->first();
        $var->title= $request->title;
        $var->description = $request->description;
        $var->image = $request->image;
        $var->save();
      
        return redirect()->route('admin.noticelist');

    }
    public function list(){

        $admins = Notice::all();
        return view('pages.admins.noticelist')->with('admins',$admins);
    }
    public function delete(Request $request){
        $var = Notice::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('admin.noticelist');

    }
}
