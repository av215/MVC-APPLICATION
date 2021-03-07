<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Appoinment;
use DB;
class Pages extends Controller
{
    public function index(Request $req){
        $this->validate($req, [
            'username' => 'required', 'pwd' => 'required'
         ]);
            $req->user = 'username';
            $req->password = 'pwd';

         $data = $req->input();
         $req->session()->put('user', $data['username']);

        return veiw('mvcpages/index');
    }
    
    public function insert(Request $req){
        $this->validate($req, [
            'name' => 'required', 'email' => 'required',
            'dob' => 'required', 'password' => 'required',
            'address' => 'required', 'phone' => 'required',
            'role' => 'required',
        ]);
        $member = new Member;
        $member->name =$req->name;
        $member->email =$req->email;
        $member->dob =$req->dob;
        $member->password =$req->password;
        $member->address =$req->address;
        $member->phone =$req->phone;
        $member->role =$req->role;
        $member->save();

        return redirect('/mvcpages/dashboard');
    }

    public function info(){

        $data= Member::all();
        return view('mvcpages/info', ['member'=>$data]);
    }
    public function event(){
        return view('mvcpages/event');
    }
    public function dashboard(){
        return view('mvcpages/dashboard');
    }
    public function appointment(){
        return view('mvcpages/appointment');
    }
}
