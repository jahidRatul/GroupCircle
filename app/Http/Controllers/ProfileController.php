<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EduUp;
use App\BasicUp;
use App\User;

class ProfileController extends Controller
{
    public function index($id){
        $userObject=User::where('id',$id)->first();
        $BasicObject=BasicUp::where('id',$id)->first();
        $EduObject=EduUp::where('id',$id)->first();
       /* $eduBasicObject = EduUp::all();
        $basicBasicObject = BasicUp::all();
        $userBasicObject = User::all();*/
        if( $BasicObject==null && $EduObject==null){
            $basicObj=new BasicUp();
            $basicObj->id = $id;
            $basicObj->livingIn = '';
            $basicObj->language = '';
            $basicObj->birthdayPlace = '';
            $basicObj->status = '';
            $basicObj->religion = '';
            $basicObj->bloodGroup = '';
            $basicObj->socialNetwork ='';
            $basicObj->address = '';
            $basicObj->save();

            $EduObj=new EduUp();
            $EduObj->id = $id;
            $EduObj->schools = '';
            $EduObj->college = '';
            $EduObj->highSchools = '';
            $EduObj->university = '';
            $EduObj->professionalSkills = '';
            $EduObj->personalSkills = '';
            $EduObj->technicalSkills ='';
            $EduObj->achievement = '';
            $EduObj->others = '';
            $EduObj->save();
            return view('frontEnd.update.profile',['eduinfo'=>$EduObj,'basicinfo'=>$basicObj,'userInfo'=>$userObject]);
        }
        elseif( $BasicObject==null && $EduObject!=null){
            $basicObj=new BasicUp();
            $basicObj->id = $id;
            $basicObj->livingIn = '';
            $basicObj->language = '';
            $basicObj->birthdayPlace = '';
            $basicObj->status = '';
            $basicObj->religion = '';
            $basicObj->bloodGroup = '';
            $basicObj->socialNetwork ='';
            $basicObj->address = '';
            $basicObj->save();
            return view('frontEnd.update.profile',['eduinfo'=>$EduObject,'basicinfo'=>$basicObj,'userInfo'=>$userObject]);
        }
        elseif( $BasicObject!=null && $EduObject==null){
            $EduObj=new EduUp();
            $EduObj->id = $id;
            $EduObj->schools = '';
            $EduObj->college = '';
            $EduObj->highSchools = '';
            $EduObj->university = '';
            $EduObj->professionalSkills = '';
            $EduObj->personalSkills = '';
            $EduObj->technicalSkills ='';
            $EduObj->achievement = '';
            $EduObj->others = '';
            $EduObj->save();
            return view('frontEnd.update.profile',['eduinfo'=>$EduObj,'basicinfo'=>$BasicObject,'userInfo'=>$userObject]);
        }
        else
            return view('frontEnd.update.profile',['eduinfo'=>$EduObject,'basicinfo'=>$BasicObject,'userInfo'=>$userObject]);


}}
