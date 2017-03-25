<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendReminderEmail extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;
//    use InteractsWithQueue, Queueable, SerializesModels;
        public   $MailAccount;
        private  $data;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($MailAccount,$data)
    {
        $this->data=$data;
        
        $this->MailAccount=$MailAccount;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        \Illuminate\Support\Facades\Mail::raw($this->data,function($MailObj){
            $MailObj->subject("zhuti");
            $MailObj->to($this->MailAccount); 
        });
    }
}
