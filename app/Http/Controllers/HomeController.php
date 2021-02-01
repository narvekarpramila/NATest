<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\User;
use Hash;
use Cookie;
use Illuminate\Support\Facades\Input;
use App\OEM_Specs;

class HomeController extends Controller
{


      /**
     * Show the login page.
     *
     * @return \Illuminate\Http\Response
     */
      public function login(Request $request, $email_address = null) {
        $password = null;
        if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
          $email_address = $_COOKIE['email'];
          $password = base64_decode($_COOKIE['password']);
        }

        if (Auth::user() != null) {
          return redirect('admin/dashboard');
        }

        return view('login', ['email' => $email_address, 'password' => $password]);
      }

      /*     * Function: sign_in

     * SignIn registered user with valid email and password.
     *
     */

      public function sign_in(Request $request) {
        $input = $request->all();
        $email = $input['email'];
        $password = trim($input['password']);

       if (Auth::attempt(['email' => $email, 'password' => $password, 'user_type' => 'admin'])) {       
          
                setcookie('email', $email, time() + (2592000), "/");
                setcookie('password', base64_encode($password), time() + (2592000), "/");
             
                return redirect('api/admin-dashboard'); 
                   
        } elseif(Auth::attempt(['email' => $email, 'password' => $password, 'user_type' => 'dealer'])) {       
          
                setcookie('email', $email, time() + (2592000), "/");
                setcookie('password', base64_encode($password), time() + (2592000), "/");
             
                return redirect('api/dealer-dashboard'); 
                   
        }
         else {
            return redirect('login')->with('error', 'Email or password you entered is incorrect.');
        }
      }


           /**
     * Show the login page.
     *
     * @return \Illuminate\Http\Response
     */
           public function signup() {
            if (Auth::user() != null) {
              return redirect('admin/dashboard');
            }

            return view('register');
          }


          /*     * Function: email_verification

           * Verify users account using token .*
           */

          public function email_verification(UserInterface $user, $remember_token) {
            $res = $user->verification($remember_token);
            if (!empty($res)) {
              $result = 'success';
              $message = 'Your Email address is successfully verified! Please login to access your account.';
            } else {
              $result = 'error';
              $message = 'Invalid token given. Please verify your link.';
            }
            return view('account_verify', ['result' => $result,
              'message' => $message]);
          }

     /**
     * randomString
     * @param $length length
     * @return randomString
     */
     function generateRandomString($length = 10) {
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
    }


     /*     * Function: saveUser

     * Register new resource for user table and assign default free package in user_subscription table.
     *
     */

     public function register(Request $request){

      if (User::where('email', '=', $request->email)->exists()) {
    return redirect()->back()->with('error','You have already register with this email');
}
     else{
       $user = new User;
       $token = $this->generateRandomString('20');
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = Hash::make($request->password);
       $user->remember_token = $token;
       $user->user_type='customer';
       $user->save();
       return redirect('/');
     }


   }

     /** Function: logout
     * Logout the user.**/
     public function logout(Request $request) {
      Auth::guard()->logout();
      $request->session()->invalidate();
      return redirect('/');
    }

    public function forgotPassword(){
      return view('forgotPassword');
    }

    public function forgotPassword_mail(Request $request){

     $email= $request->email;

     $subject = 'Mail From Raftar Motor Cycle Tours ';

     $to = 'narvekarpramila11@gmail.com';
     $body = "https://sastahealth.com/reset-password";
     $from = 'pramilanarvekar92@gmail.com';
     $headers = "From: " . strip_tags($from) . "\n";
     if (mail($to, $subject, $body, $headers)) {
      ?>
      <script type="text/javascript"> alert("mail send successfully !");
      window.location.href = "login";</script><?php
    } else {
      ?>
      <script type="text/javascript"> alert("Sending failed.!"); 
    window.location.href = "forgotPassword";</script>

    <?php
  }
}


public function resetPassword(){
  return view('resetPassword');
}

public function updatePassword(Request $request){

  $user = User::where('email','=',$request->email)->first();
  $user->email = $request->email;
  $user->password =  Hash::make($request->password);
  if($user != null){
    if($request->password == $request->confirm_password){
     $user->save();
   }else{
    return redirect()->back()->with('warning','do not match password');
  }

}else{
  return redirect()->back()->with('warning','Please enter registered email');
}
return redirect('login');
}


 public function index(Request $request)
  {
     $search = $request->search;
     if ($search==NULL) {
      $oem_specs =OEM_Specs::all();
    }else{
  $oem_specs = OEM_Specs::where('model_name', 'LIKE','%'.$search.'%')->get();
    }
    return view('index')->with('oem_specs',$oem_specs);
  }


}
