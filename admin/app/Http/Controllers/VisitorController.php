<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitorModel;

class VisitorController extends Controller{

            function VisitorIndex(){
                //$VisitorData2 =json_decode(VisitorModel::orderBy('id','desc')->take(500)->get()) ;
                //$VisitorData =json_decode(VisitorModel::all(),true);
                
                $VisitorData = VisitorModel::orderBy('id','desc')->take(5)->get();
            
                return view('Visitor',['VisitorData'=> $VisitorData]);
              
            }
}