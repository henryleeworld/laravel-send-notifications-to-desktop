<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendDesktopNotifications extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notification:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Desktop notification';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->notify(config('app.name'), __('Waiting for you for a long time, welcome to join👋.'), storage_path('images/kamen-rider-black.png'));
    }
}
