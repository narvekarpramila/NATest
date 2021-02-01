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
    
   public function dealerLogin(){
       return view('dealer.dealerLogin');
   }

   public function signIn(Request $request){
 $input = $request->all();
        $email = $input['email'];
        $password = trim($input['password']);

        if (Auth::attempt(['email' => $email, 'password' => $password])) {       
          
                setcookie('email', $email, time() + (2592000), "/");
                setcookie('password', base64_encode($password), time() + (2592000), "/");
             
                return redirect('dealer/dashboard'); 
                   
        } else {
            return redirect()->back()->with('error', 'Email or password you entered is incorrect.');
        }
   }

  
   public function dashboard(Request $request){
     $search = $request->search;
     if ($search==NULL) {
      $oem_specs =OEM_Specs::all();
    }else{
  $oem_specs = OEM_Specs::where('model_name', 'LIKE','%'.$search.'%')->get();
    }
      return view('dealer.dealerDashboard')->with('oem_specs',$oem_specs);
   }

	public function addDealer(){
       return view('dealer.addDealer');
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
    return redirect('api/dealer/view-dealer');
}

public function editDealer($id){
   $id = base64_decode($id);
    $dealer= Dealer::find($id);
   return view('dealer.addDealer')->with('dealer',$dealer);
}



public function viewDealer(){
 $dealer=Dealer::all();
 return view('dealer.ViewDealer')->with('dealer',$dealer);
}


public function getModelDetails(){
  $models= OEM_Specs::select('model_name')->get();
  return view('dealer.viewModel')->with('models',$models);
}

public function getSearch(Request $request){
  $search = $request->search;

  $details = OEM_Specs::where('model_name', 'LIKE','%'.$search.'%')->get();
  return $details;
}



	public function addinventory(){
       return view('dealer.addInventory');
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
    return redirect('api/dealer/view-inventory');
}

public function editinventory($id){
   $id = base64_decode($id);
    $inventory= Marketplace_Inventory::find($id);
   return view('dealer.addInventory')->with('inventory',$inventory);
}



public function viewinventory(){
 $inventory=Marketplace_Inventory::all();
 return view('dealer.ViewInventory')->with('inventory',$inventory);
}

}
