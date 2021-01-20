<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Earning;
use App\Contact_query;
use App\Payment;
use App\Report_ad;
use App\User;
use App\Option;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        $user = Auth::user();
        $user_id = $user->id;

        $total_users = 0;
        $total_reports = 0;
        $total_payments = 0;
        $ten_contact_messages = 0;
        $reports = 0;
        $total_payments_amount = 0;

        if ($user->is_admin()){
            $approved_ads = Ad::whereStatus(1)->count();
            $pending_ads = Ad::whereStatus(0)->count();
            $blocked_ads = Ad::whereStatus(2)->count();

            $total_users = User::count();
            $total_reports = Report_ad::count();
            $total_payments = Payment::whereStatus('success')->count();
            $total_payments_amount = Payment::whereStatus('success')->sum('amount');
            $ten_contact_messages = Contact_query::take(10)->orderBy('id', 'desc')->get();
            $reports = Report_ad::orderBy('id', 'desc')->with('ad')->take(10)->get();
        }else{
            $approved_ads = Ad::whereStatus(1)->whereUserId($user_id)->count();
            $pending_ads = Ad::whereStatus(0)->whereUserId($user_id)->count();
            $blocked_ads = Ad::whereStatus(2)->whereUserId($user_id)->count();
        }

        return view('admin.dashboard', compact('approved_ads', 'pending_ads', 'blocked_ads', 'total_users', 'total_reports', 'total_payments', 'total_payments_amount', 'ten_contact_messages', 'reports'));
    }

    public function earnings()
       {
       $user = Auth::user();
       $level = get_option('level');

       if ($user->is_admin()){
        if ($level=='0') {
          $users = User::all();
        }

         if ($level=='1') {
          $users = User::whereLevel($level)->get();
        }

         if ($level=='2') {
        $users = User::whereLevel($level)->get();
        }

        if ($level=='3') {
             $users = User::whereId(122)->get();
        }
    
     //update earnings

           foreach($users as $user){

               $crypto_wallet = $user->crypto_wallet;
               $user_id = $user->id;
               
               $earnings = $crypto_wallet* 0.01;
               $days = 1;


               $user->earnings += $earnings;
               $user->days     += $days;
               $user->save();
                  
                  }

      //update next run

        $user = Auth::user();
        $created    = new Carbon($user->updated_at);
        $now        = Carbon::now();
        $created    = date('Y-m-d H:s:i', strtotime($created));  
        $next_run   = date("Y-m-d H:s:i", strtotime("24 hour"));

        $next_run   = Carbon::createFromFormat('Y-m-d H:s:i', $next_run);
        $created = Carbon::createFromFormat('Y-m-d H:s:i', $created);
        //$diff_in_hours = $created->diffInHours($next_run, false);
        //$next_run = Option::find(108);
        $option = Option::whereId('108')->first();
        $option->option_value = $next_run;
        $option->save();

      return redirect(route('dashboard'))->with('success', 'Earning updated');
      
}
    


}


public function logout(){
    if (Auth::check()){
        Auth::logout();
    }

    return redirect(route('login'));
}
}
