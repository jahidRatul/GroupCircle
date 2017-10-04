<?php

namespace App\Http\Controllers;

use App\CategoryList;
use Auth;
use App\StatasPost;
use Illuminate\Http\Request;

class Status_postController extends Controller
{
    public function statusUp(Request $request)
    {

        //return $request->all();
        $this->validate($request, [
            'upload-photo' => 'image|max:1024',
            //'status'=>'required',

        ]);
        $image = $request->file('upload-photo');

        if ($image==null)
        {
            $imageUrl='';
        }
        else{
            $name = $image->getClientOriginalName();
            $uploadPath = 'User/image/';
            $image->move($uploadPath, $name);
            $imageUrl = $uploadPath . $name;
        }
        $this->saveFunction($request, $imageUrl);

        $categoryListAddByuser=new CategoryList();
        $categoryListAddByuser->user_id = Auth::user()->id;
        $categoryListAddByuser->Category_name=$request->option;
        $categoryListAddByuser->save();
        return redirect('/home');
    }

    protected function saveFunction($request, $imageUrl)
    {
        $statusObj = new StatasPost();
        $statusObj->user_id = Auth::user()->id;
        $statusObj->status = $request->status;
        $statusObj->whoSee = $request->whoSee;
        $statusObj->option = $request->option;
        $statusObj->upload_photo = $imageUrl;
        $statusObj->anonymous = $request->anonymous;
        $statusObj->post_time = date("Y-m-d (h:i:sa)");
        $statusObj->save();
    }

    public function statusDelete($id){

        $statusObj=StatasPost::find($id);
        $statusObj->delete();
        return redirect('/home');
    }

}
