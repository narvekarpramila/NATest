<?php

namespace App\Http\Controllers;
use App\Dealer;
use Illuminate\Http\Request;
use App\User;
use App\OEM_Specs;
use Auth;
use Hash;
use App\Marketplace_Inventory;

class DealerController extends Controller
{
    

  
   public function dashboard(Request $request){
     $search = $request->search;
     if ($search==NULL) {
      $oem_specs =OEM_Specs::all();
    }else{
 $oem_specs = OEM_Specs::where('model_name', 'LIKE','%'.$search.'%')->orWhere('year_of_model', 'LIKE','%'.$search.'%')->orWhere('price', 'LIKE','%'.$search.'%')->orWhere('color', 'LIKE','%'.$search.'%')->orWhere('mileage', 'LIKE','%'.$search.'%')->get();
    }
      $response["oem_specs"] = $oem_specs;
       $response["success"] = 1;
    return response()->json($response);
   }

 public function saveDealer(Request $request){
    $dealer = Dealer::where('id', $request->id)->first();
    if (!isset($dealer) && $dealer == '') {
        $dealer= new Dealer;
    }
    $dealer->name=$request->name;
    $dealer->address=$request->address;
    $dealer->phone_no=$request->phone_no;
    $dealer->save();
    $response["dealer"] = $dealer;
       $response["success"] = 1;
    return response()->json($response);
}

public function editDealer($id){
   $id = base64_decode($id);
    $dealer= Dealer::find($id);
    $response["dealer"] = $dealer;
       $response["success"] = 1;
    return response()->json($response);
}



public function viewDealer(){
 $dealer=Dealer::all();
 $response["dealer"] = $dealer;
       $response["success"] = 1;
    return response()->json($response);
}

public function deleteDealer($id){
   $id = base64_decode($id);
    $dealer= Dealer::find($id);
    $dealer->delete();
    $response["dealer"] = $dealer;
       $response["success"] = 1;
    return response()->json($response);
} 


public function getModelDetails(){
  $models= OEM_Specs::select('model_name')->get();
   $response["models"] = $models;
       $response["success"] = 1;
    return response()->json($response);
}

public function getSearch(Request $request){
  $search = $request->search;

  $details = OEM_Specs::where('model_name', 'LIKE','%'.$search.'%')->get();
   $response["details"] = $details;
       $response["success"] = 1;
    return response()->json($response);
}




 public function saveinventory(Request $request){
    $inventory = Marketplace_Inventory::where('id', $request->id)->first();
    if (!isset($inventory) && $inventory == '') {
        $inventory= new Marketplace_Inventory;
    }
    $inventory->KM=$request->km;
    $inventory->major_scratches=$request->major_scratches;
    $inventory->original_paints=$request->original_paints;
     $inventory->no_of_accidents=$request->no_of_accidents;
    $inventory->no_of_prev_buyers=$request->no_of_prev_buyers;
    $inventory->registration_place=$request->registration_place;
    $inventory->save();
    $response["inventory"] = $inventory;
       $response["success"] = 1;
    return response()->json($response);
}

public function editinventory($id){
   $id = base64_decode($id);
    $inventory= Marketplace_Inventory::find($id);
    $response["inventory"] = $inventory;
       $response["success"] = 1;
    return response()->json($response);
}



public function deleteinventory($id){
   $id = base64_decode($id);
    $inventory= Marketplace_Inventory::find($id);
    $inventory->delete();
    $response["inventory"] = $inventory;
       $response["success"] = 1;
    return response()->json($response);
} 

public function viewinventory(){
 $inventory=Marketplace_Inventory::all();
 return view('dealer.ViewInventory')->with('inventory',$inventory);
}

}
