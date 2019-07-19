<?php

namespace paymentCm\Dohone;

use Illuminate\Config\Repository;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

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
     * @return array|Factory|View
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
            return self::reply(!$validator->fails(), $validator->errors());

        return view("paymentcm::payment-simulator")->with("data", $data);
    }

    /**
     * @param Request $request
     * @return array
     */
    public static function getResult(Request $request)
    {
        return $request->only(config('dohone.result'));
    }

    /**
     * @param $amount
     * @param $paymentToken
     * @param null $transactionID
     * @return array
     */
    public static function verify($amount, $paymentToken, $transactionID)
    {
        $data = [
            'idReqDoh' => $paymentToken,
            'rI' => $transactionID,
            'rMt' => $amount,
            'rDvs' => config('dohone.start.rDvs'),
            'rH' => config("dohone.start.rH"),
            'cmd' => "verify"
        ];

        $validator = Validator::make($data, [
            "idReqDoh" => ['required'],
            "rMt" => ['required', 'integer'],
            "rDvs" => ['required', Rule::in(['XAF', 'EUR', 'USD'])],
            "rI" => ['required'],
            "cmd" => ['required', Rule::in(['verify'])],
            'rH' => ['required', 'min:8']
        ]);
        if ($validator->fails())
            return self::reply(!$validator->fails(), $validator->errors());

        return self::run($data) == 'OK';
    }

    /**
     * @param array $data
     * @return Repository|mixed|string
     */
    private static function genVerifyUrl(array $data)
    {
        $base_url = config("dohone.debug") ? config("dohone.sandbox") : config("dohone.url");
        $i = 0;
        foreach ($data as $key => $value) {
            if ($i == 0) {
                $base_url = $base_url . "?" . $key . "=" . urlencode($value);
            } else
                $base_url = $base_url . "&" . $key . "=" . urlencode($value);
            $i++;
        }

        return $base_url;
    }

    /**
     * @return array
     */
    protected static function reply($success, $message)
    {
        return [
            'status' => $success,
            'message' => $message
        ];
    }

    /**
     * @param $amount
     * @param $method
     * @param int $levelFeeds
     * @return bool|string
     */
    public static function cotation($amount, $method, $levelFeeds = 0)
    {
        $data = [
            'cmd' => "cotation",
            'rMt' => $amount,
            'rMo' => $method,
            'rDvs' => config('dohone.start.rDvs'),
            'rH' => config('dohone.start.rH'),
            'levelFeeds' => $levelFeeds,
        ];

        return self::run($data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public static function method($id)
    {
        $method = [
            "1" => "MTN",
            "2" => "Orange",
            "3" => "Express Union",
            "10" => "Dohone",
            "17" => "YUP",
        ];
        return $method[$id];
    }

    /**
     * @param $phone
     * @param $code
     * @return array
     */
    public static function restSMSConfirmation($phone, $code)
    {
        $data = [
            'cmd' => "cfrmsms",
            'rT' => $phone,
            'rCS' => $code,
        ];

        $validator = Validator::make($data, [
            "rT" => ['required'],
            'rCS' => ['required']
        ]);

        if ($validator->fails())
            return self::reply(!$validator->fails(), $validator->errors());

        $resSplit = explode(':', self::run($data));
        return self::reply(Str::contains($resSplit[0], "OK"),
            Str::ucfirst(trim($resSplit[1])));
    }

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
     * @return array|Factory|View
     */
    public static function restInit($phone, $amount, $email, $method, $orangeCode = null, $commandID = null,
                                    $endPage = null, $notifyPage = null,
                                    $comment = null, $name = "Client", $lang = 'default')
    {
        $data = array_merge(config('dohone.start'), [
            'rN' => $name,
            'rLocale' => (strcmp($lang, 'default') == 0 ? config('dohone.start.rLocale') : $lang),
            'rT' => $phone,
            'rMt' => $amount,
            'rE' => $email,
            'rMo' => $method,
            'rOTP' => $orangeCode,
            'rI' => $commandID,
            'motif' => $comment,
            "endPage" => $endPage ?? config("dohone.start.endPage"),
            "notifyPage" => $notifyPage ?? config("dohone.start.notifyPage"),
        ]);

        //check if is not Orange
        if ($method != 2)
            unset($data['rOTP']);
        unset($data['cancelPage']);
        unset($data['logo']);

        $validator = Validator::make($data, [
            "rMt" => ['required', 'integer'],
            "rDvs" => ['required', Rule::in(['XAF', 'EUR', 'USD'])],
            "source" => ['required', 'string'],
            "endPage" => ['required', 'url'],
            "notifyPage" => ['required', 'url'],
            'rMo' => ['required', Rule::in([1, 2, 3, 10, 17])],
            'rOTP' => Rule::requiredIf($method == 2),
            "cmd" => ['required', Rule::in(['start'])],
            "rN" => ['string'],
            "rLocale" => ['required', Rule::in(['fr', 'en'])],
            "rT" => ['required'],
            "rE" => ['required', 'email'],
            'rH' => ['required', 'min:8']
        ]);

        if ($validator->fails())
            return self::reply(!$validator->fails(), $validator->errors());

        $resSplit = explode(':', self::run($data));
        return self::reply(Str::contains($resSplit[0], "OK"),
            Str::ucfirst(trim($resSplit[1])));
    }

    /**
     * @param $data
     * @return bool|string
     */
    protected static function run($data)
    {
        $curl = curl_init(self::genVerifyUrl($data));
        curl_setopt($curl, CURLOPT_FAILONERROR, TRUE);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        $result = curl_exec($curl);
        @curl_close($curl);

        return $result;
    }
}
