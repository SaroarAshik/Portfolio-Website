<?php

namespace App\Http\Controllers;
use App\PhotoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller{

    function PhotoIndex(){
        return view('Gallery');
    }

    function PhotoUpload(Request $request){
         
        $photoPath=  $request->file('photo')->store('public');

        $photoName=(explode('/',$photoPath))[1];
        //array[0]=public....array[1]=random name

        $host=$_SERVER['HTTP_HOST'];
        $location="http://".$host."/storage/".$photoName;

        $result= PhotoModel::insert(['location'=>$location]);

        if($result==true){      
            return 1;
        }
        else{
            return 0;
        }

    }
    
}