<?php

namespace App\Http\Controllers;

use App\Facades\UserFacade;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function test(Request $request){
        $test= UserFacade::getUser();
        return view('test', compact('test'));
    }
}
