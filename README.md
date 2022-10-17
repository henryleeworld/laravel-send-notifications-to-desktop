# Laravel 9 推送桌面通知

引入 nunomaduro 的 laravel-desktop-notifier 套件來擴增推送桌面通知，該套件使用 JoliNotif 跨平台 PHP 函式庫來顯示桌面通知，因此當有新的訊息被接收到，便會在桌面用一個方框來顯示該訊息的內容，藉以提醒使用者需注意。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __notification:send__ 來推送桌面通知。
```sh
$ php artisan notification:send
```

----

## 畫面截圖
![](https://i.imgur.com/RBeWeAB.png)
> 向使用者顯示桌面通知