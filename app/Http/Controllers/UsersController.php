<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsersModel;
use App\BasicMenuModel;
use App\TypeUserModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;

class UsersController extends Controller
{
    public function index(Request $request){
        $users=DB::table('users')
        ->join('type_user','type_user.id','=','users.id_perfil' )
        ->select('users.id', 'users.name', 'users.username','type_user.name as type', 'users.status')
        ->get();

        $usertypes = TypeUserModel::where('status','1')->get();
        $menu = BasicMenuModel::where('status','1')->get();
       return view('users.index',["users"=>$users , "menu"=>$menu, "usertypes"=>$usertypes]);
    }

    public function store(Request $request){
        $users =UsersModel::create([
            'id_perfil' => $request->id_perfil,
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
        return response()->json($users);
    }

    public function show($users_id){
        $users = UsersModel::find($users_id);
        $users->status=1;
        return response()->json($users);
    }
    public function update(Request $request, $users_id){
        $users = UsersModel::find($users_id);
        $users->id_perfil = $request->id_perfil;
        $users->name = $request->name;
        $users->username = $request->username;
        $users->status=1;
        $users->save();
        return response()->json($users);
    }

    public function destroy($users_id){
        $users = UsersModel::find($users_id);
         $users->status=0;
         $users->save();
        return response()->json($users);
    }
}
