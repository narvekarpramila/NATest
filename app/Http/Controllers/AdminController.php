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
  $oem_specs = OEM_Specs::where('model_name', 'LIKE','%'.$search.'%')->get();
    }
      return view('admin.adminDashboard')->with('oem_specs',$oem_specs);
   }

  public function addDealer(){
       return view('admin.addDealer');
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
    return redirect('api/admin/view-dealer');
}

public function editDealer($id){
   $id = base64_decode($id);
    $dealer= Dealer::find($id);
   return view('admin.addDealer')->with('dealer',$dealer);
}



public function viewDealer(){
 $dealer=Dealer::all();
 return view('admin.ViewDealer')->with('dealer',$dealer);
}


public function getModelDetails(){
  $models= OEM_Specs::select('model_name')->get();
  return view('admin.viewModel')->with('models',$models);
}

public function getSearch(Request $request){
  $search = $request->search;

  $details = OEM_Specs::where('model_name', 'LIKE','%'.$search.'%')->get();
  return $details;
}
}

