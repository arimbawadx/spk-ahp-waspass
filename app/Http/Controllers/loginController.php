<?php

namespace App\Http\Controllers;

use App\developer;
use App\customer;
use App\admin;
use Illuminate\Http\Request;
use Alert;

class loginController extends Controller
{
   	public function index(Request $request)
   	{
   		$admin=admin::where('username', $request->username)->where('password',$request->password)->first();
   		$customer=customer::where('username', $request->username)->where('password',$request->password)->first();
   		$developer=developer::where('username', $request->username)->where('password',$request->password)->first();

   		if ($admin==true) {
            Alert::success('Selamat Datang '.$admin['nama_admin']);
   			session()->put('dataLoginAdmin', $admin);
   			return redirect('/admins');
   		}elseif($customer==true){
   			session()->put('dataLoginCustomer', $customer);
   			return redirect('/test');
   		}elseif($developer==true){
   			session()->put('dataLoginDeveloper', $developer);
   			return redirect('/test');
   		}else{
            Alert::error('username atau password salah');
            return redirect('/');
            

   			// echo "username atau password salah";
   		}

   	}



      public function logout()
      {
         Alert::success('Pergi lah kau');
         session()->forget('dataLoginAdmin');
         session()->forget('dataLoginCustomer');
         session()->forget('dataLoginDeveloper');
         return redirect('/');
      }
}
