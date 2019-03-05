<?php

namespace paymentCm\Dohone;

class Dohone
{
    public static function init_payment($phone, $amount, $email, $reason = null, $lang = 'default', $name = "Client")
    {
        $data = array_merge(config('dohone.start'),[
            'rN' => $name,
            'rLocale' => (strcmp($lang, 'default') == 0 ? config('dohone.start.logo') : $lang),
            'rT' => $phone,
            'rH' => $amount,
            'rE' => $email,
            'rI' => $reason
        ]);
        dd($data);
    }
}
