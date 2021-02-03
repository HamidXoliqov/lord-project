<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class Telegram extends Model
{

    public static function send($full_name, $phone)
    {
        $website="https://api.telegram.org/bot".Settings::getValue('telegram_bot_token');
        $homeUrl = 'https://lordfaktor.uz/';
        $text="Sizda ".$homeUrl." saytidan yangi murojaat. 
        Ismlari: ".$full_name.". 
        Telefon: ".$phone;
        $params= [
            'chat_id'=>Settings::getValue('telegram_merchand_id'),
            'disable_web_page_preview' => 'true',
            'text'=> $text 
        ];
        $ch = curl_init($website . '/sendMessage');
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $temp = curl_exec($ch);
        curl_close($ch);
    }

}