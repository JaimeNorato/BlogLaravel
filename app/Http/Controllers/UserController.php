<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use App\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index(){
    	$user = User::orderBy('id','ASC')->paginate(5);
    	return view('admin.users.index')->with('users',$user);
    }

    public function create(){
    	return view('admin.users.create');
    }

    public function store(UserRequest $request){
    	$user=new User($request->all());
    	$user->password=bcrypt($request->password);
    	$user->save();
        Flash::success("Se ha registrado ".$user->name." de forma exitosa");
    	return redirect()->route('admin.users.index');
    }
    public function update(Request $request,$id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = $request->type;
        $user->save();
        Flash::warning("El usuario ".$user->name." se ha editado de forma exitosa");
        return redirect()->route('admin.users.index');
    }
    public function edit($id){
        $user = User::find($id);
        return view('admin.users.edit')->with('user',$user);
    }
    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        Flash::error('El usuario '.$user->name.' se a eliminado de forma exitosa');
        return redirect()->route('admin.users.index');
    }
    public function show(){

    }
}
