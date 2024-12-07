<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MergeDataJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */

     public function handle()
    {
        // Logic for the Job
        Log::info('Example Job executed successfully!');
    }
    // public function handle(): void
    // {


    //     $localUsers = DB::connection('mysql')->table('users')->get();

    //     // Cloud DB Data
    //     $cloudUsers = DB::connection('cloud_mysql')->table('users')->get();
    
    //     // Sync Cloud Users to Local
    //     foreach ($cloudUsers as $cloudUser) {
    //         $existingLocalUser = DB::connection('mysql')->table('users')->where('email', $cloudUser->email)->first();
    
    //         if (!$existingLocalUser) {
    //             // Insert if not exists
    //             DB::connection('mysql')->table('users')->insert([
    //                 'id' => $cloudUser->id,
    //                 'name' => $cloudUser->name,
    //                 'email' => $cloudUser->email,
    //                 'password' => $cloudUser->password,
    //                 'created_at' => $cloudUser->created_at,
    //                 'updated_at' => $cloudUser->updated_at,
    //             ]);
    //         } elseif ($existingLocalUser->updated_at < $cloudUser->updated_at) {
    //             // Update if Cloud data is newer
    //             DB::connection('mysql')->table('users')
    //                 ->where('email', $cloudUser->email)
    //                 ->update([
    //                     'name' => $cloudUser->name,
    //                     'password' => $cloudUser->password,
    //                     'updated_at' => $cloudUser->updated_at,
    //                 ]);
    //         }
    //     }
    
    //     // Sync Local Users to Cloud
    //     foreach ($localUsers as $localUser) {
    //         $existingCloudUser = DB::connection('cloud_mysql')->table('users')->where('email', $localUser->email)->first();
    
    //         if (!$existingCloudUser) {
    //             // Insert if not exists
    //             DB::connection('cloud_mysql')->table('users')->insert([
    //                 'id' => $localUser->id,
    //                 'name' => $localUser->name,
    //                 'email' => $localUser->email,
    //                 'password' => $localUser->password,
    //                 'created_at' => $localUser->created_at,
    //                 'updated_at' => $localUser->updated_at,
    //             ]);
    //         } elseif ($existingCloudUser->updated_at < $localUser->updated_at) {
    //             // Update if Local data is newer
    //             DB::connection('cloud_mysql')->table('users')
    //                 ->where('email', $localUser->email)
    //                 ->update([
    //                     'name' => $localUser->name,
    //                     'password' => $localUser->password,
    //                     'updated_at' => $localUser->updated_at,
    //                 ]);
    //         }
    //     }
    // try {
    //     // Your existing job logic
    // } catch (\Exception $e) {
    //     Log::error('Error in MergeDataJob: ' . $e->getMessage());
    // }

    
    
    // }
}
