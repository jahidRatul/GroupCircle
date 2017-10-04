<?php

namespace App\Http\Controllers;

use App\CategoryList;
use App\User;
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

        if ($image == null) {
            $imageUrl = '';
        } else {
            $name = $image->getClientOriginalName();
            $uploadPath = 'User/image/';
            $image->move($uploadPath, $name);
            $imageUrl = $uploadPath . $name;
        }
        $this->saveFunction($request, $imageUrl);

        $categoryListAddByuser = new CategoryList();
        $categoryListAddByuser->user_id = Auth::user()->id;
        $categoryListAddByuser->Category_name = $request->option;
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

    public function statusDelete($id)
    {

        $statusObj = StatasPost::find($id);
        $statusById1 = StatasPost::where('id',$id)->first();
        $oldImageUrl1 = $statusById1->upload_photo;
        unlink($oldImageUrl1);
        $statusObj->delete();
        return redirect('/home');
    }

    public function statusEdit($id)
    {

        $statusObj = StatasPost::where('id', $id)->first();
        $userId = $statusObj->user_id;
        $userObj = User::where('id', $userId)->first();
        /*echo '<pre>';
        print_r($statusObj);
        exit();*/
        return view('frontEnd.home.statusEdit', ['StatusById' => $statusObj, 'StatusByUser' => $userObj,]);
    }

    public function statusUpdate(Request $request)
    {
        $imageUrl = $this->imageExistStatus($request);
        $statusObj=StatasPost::find($request->Statusid);
        $statusObj->user_id = $request->userId;
        $statusObj->status = $request->status;
        $statusObj->whoSee = $request->whoSee;
        $statusObj->option = $request->option1;
        $statusObj->upload_photo = $imageUrl;
        $statusObj->anonymous = $request->anonymous;
        $statusObj->post_time = date("Y-m-d (h:i:sa)");
        $statusObj->save();
        return redirect('/home');

    }

    private function imageExistStatus($request)
    {
        $statusById = StatasPost::where('id', $request->Statusid)->first();
        $statusImage = $request->file('upload_photo');
        if ($statusImage) {
            $oldImageUrl = $statusById->upload_photo;
            unlink($oldImageUrl);
            $name = $statusImage->getClientOriginalName();
            $uploadPath = 'User/image/';
            $statusImage->move($uploadPath, $name);

            $imageUrl = $uploadPath . $name;
        } else {
            $imageUrl = $statusById->upload_photo;
        }
        return $imageUrl;
    }


}
