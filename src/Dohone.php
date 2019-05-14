<?php

namespace paymentCm\Dohone;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Ixudra\Curl\Facades\Curl;

class Dohone
{
    /**
     * @param $phone
     * @param $amount
     * @param $email
     * @param null $commandID
     * @param null $endPage
     * @param null $notifyPage
     * @param null $cancelPage
     * @param null $comment
     * @param string $name
     * @param string $lang
     * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function init($phone, $amount, $email, $commandID = null,
                                $endPage = null, $notifyPage = null, $cancelPage = null,
                                $comment = null, $name = "Client", $lang = 'default')
    {
        $data = array_merge(config('dohone.start'), [
            'rN' => $name,
            'rLocale' => (strcmp($lang, 'default') == 0 ? config('dohone.start.rLocale') : $lang),
            'rT' => $phone,
            'rMt' => $amount,
            'rE' => $email,
            'rI' => $commandID,
            'motif' => $comment,
            "endPage" => $endPage ?? config("dohone.start.endPage"),
            "notifyPage" => $notifyPage ?? config("dohone.start.notifyPage"),
            "cancelPage" => $cancelPage ?? config("dohone.start.cancelPage"),
        ]);

        $validator = Validator::make($data, [
            "rMt" => ['required', 'integer'],
            "rDvs" => ['required', Rule::in(['XAF', 'EUR', 'USD'])],
            "source" => ['required', 'string'],
            "logo" => ['url'],
            "endPage" => ['required', 'url'],
            "notifyPage" => ['required', 'url'],
            "cancelPage" => ['required', 'url'],
            "cmd" => ['required', Rule::in(['start'])],
            "rN" => ['string'],
            "rLocale" => ['required', Rule::in(['fr', 'en'])],
            "rT" => ['required'],
            "rE" => ['required', 'email'],
            'rH' => ['required', 'min:8']
        ]);
        if ($validator->fails())
            return self::reply($validator->errors(), false);

        return view("paymentcm::payment-simulator")->with("data", $data);
    }

    /**
     * @param $amount
     * @param $paymentToken
     * @param null $transactionID
     * @return array
     */
    public static function verify($amount, $paymentToken, $transactionID = null)
    {
        $result = Curl::to(config('dohone.url'))
            ->withData(['idReqDoh' => $paymentToken, 'rMt' => $amount, 'rDvs' => config('dohone.start.rDvs')])
            ->post();

        /* $curl = curl_init($request);
         curl_setopt($curl, CURLOPT_FAILONERROR, TRUE);
         curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
         curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
         curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
         curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
         $result = curl_exec($curl);
         @curl_close($curl);*/

        return self::reply($result, $result == 'OK');
    }

    /**
     * @return array
     */
    protected static function reply($data, $success = true)
    {
        $name = ($success ? 'data' : 'errors');
        return response()->json([
            'status' => $success,
            $name => $data
        ]);
    }
}
