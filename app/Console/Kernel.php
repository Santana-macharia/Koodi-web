<?php

namespace App\Console;
use App\User;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();

         $schedule->call(function () {

            //DB::table('recent_users')->delete();
         //   $users = User::all();
             $users = User::whereId(2)->get();
              foreach($users as $user){

               $crypto_wallet = $user->crypto_wallet;
               $earnings = $crypto_wallet* 0.01;
               $user->earnings += $earnings;
               $user->save();
                  }


        })->everyMinute();
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
