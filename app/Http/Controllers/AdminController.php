<?php


namespace App\Http\Controllers;
use App\Dealer;
use Illuminate\Http\Request;
use App\User;
use App\OEM_Specs;
use Auth;
use Hash;


class AdminController extends Controller
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
   return view('admin.addDealer')->with('dealer',$dealer);
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
}

