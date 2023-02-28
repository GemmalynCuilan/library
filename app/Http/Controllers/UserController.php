<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        $data = User::all();
        return view('user.index',['users'=>$data]);
    }

        public function show($id){
            $data=array(
            "id"=>$id,
            "name"=>"GemCuilan",
            "age"=>21,
            "email"=>"gemcuilan@gmail.com");
            return view('user', $data);
}
}

