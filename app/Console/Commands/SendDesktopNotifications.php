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
    protected $description = '桌面通知';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // $this->notify('您好，網路 Artisan', '喜歡代碼之美嗎？我們也這樣做！');
        $this->notify(config('app.name'), '等您好久，歡迎加入👋。', storage_path('images/kamen-rider-black.png'));
    }
}
