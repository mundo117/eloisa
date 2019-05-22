<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeUserModel;
use App\BasicMenuModel;
use App\TypeUserDetailModel;

class TypeUserController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
          //if(!$request->ajax()) return redirect('/');
          $usertypes = TypeUserModel::all();
           $menu = BasicMenuModel::where('status','1')->get();
          return view('types.index',["usertypes"=>$usertypes , "menu"=>$menu]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usertype = TypeUserModel::create($request->input());
        $id = $usertype->id;
        $menu = BasicMenuModel::where('status','1')->get();
        foreach($menu as $option){
            $data = [
                'id_type_user' => $usertype->id,
                'id_menu' => $option->id,
                'status' => 0,
            ];
            print_r($data);
        
           $new = TypeUserDetailModel::insert($data);
          
         }
         $usertype2 = TypeUserModel::find($id);
        return response()->json($usertype2);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($usertype_id)
    {

        $usertype = TypeUserModel::find($usertype_id);
        $usertype->status=1;
        return response()->json($usertype);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $usertype_id)
    {
        $usertype = TypeUserModel::find($usertype_id);
        $usertype->name = $request->name;
        $usertype->status=1;
        $usertype->save();
        return response()->json($usertype);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($usertype_id)
    {
         $usertype = TypeUserModel::find($usertype_id);
         $usertype->status=0;
         $usertype->save();
        return response()->json($usertype);
    } 
}
