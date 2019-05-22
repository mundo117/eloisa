<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BasicMenuModel;
use App\TypeUserDetailModel;
use App\TypeUserModel;

class TypeUserDetailController extends Controller
{
     public function index($id)
    {
  
            $optionsmenu =  TypeUserDetailModel::select('tu_detail.id as id','bm.name as name', 'bm.icon as icon', 'tu_detail.status as status')
            ->join('basic_menu as bm', 'bm.id', '=', 'tu_detail.id_menu')
            ->where('tu_detail.id_type_user',$id)
            ->get();
            $typeuser =TypeUserModel::where('id',$id)->get();
            $menu = BasicMenuModel::all();
          return view('assignmenttype.index',["optionsmenu"=>$optionsmenu,"menu"=>$menu,"typeuser"=>$typeuser]);
    }

/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id,$detailtype_id)
    {
        $usertype = TypeUserDetailModel::find($detailtype_id);
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
    public function destroy($id,$detailfood_id)
    {
         $usertype =TypeUserDetailModel::find($detailfood_id);
         $usertype->status=0;
         $usertype->save();
        return response()->json($usertype);
    }
}
