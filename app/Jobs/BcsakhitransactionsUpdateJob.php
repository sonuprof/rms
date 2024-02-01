<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\bcsakhi;
use App\Models\Bcsakhitransaction;

use DB;

class BcsakhitransactionsUpdateJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    public $months; 
    /**
     * Create a new job instance.
     */
    public function __construct($months)
    {
        $this->months = $months;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $months = $this->months;

        DB::table('bcsakhitransactions')
            ->where('month', $months)
            ->distinct()
            ->select('bcsakhi_id')
            ->orderBy('id')
            ->chunk(100, function ($bcsakhis) use ($months) {
                foreach ($bcsakhis as $bcsakhi) {
                    $fetchdata = DB::table('bcsakhis')
                        ->select(['district', 'block', 'village', 'bank_name', 'model'])
                        ->where('agent_id', $bcsakhi->bcsakhi_id)
                        ->first();
        
                    if ($fetchdata) {
                        Bcsakhitransaction::where('bcsakhi_id', $bcsakhi->bcsakhi_id)
                            ->where('month', $months)
                            ->update([
                                'district' => $fetchdata->district,
                                'block' => $fetchdata->block,
                                'village' => $fetchdata->village,
                                'bank_name' => $fetchdata->bank_name,
                                'model' => $fetchdata->model,
                            ]);
                    }
                }
            });
    }
}
