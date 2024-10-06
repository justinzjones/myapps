<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\OrderJourneyLeg;
use App\Models\OrderTraveler;
use App\Http\Resources\OrderResource;
use App\Http\Controllers\View;
// use Bitpay\sdk-light;
use Bitpay\Sdk\Src;
use GuzzleHttp\Client;
use Redirect;

class hppController extends Controller
{

    public function show($ref_id)
    {
        if (request()->has('crypto_payment')) {
            if (request()->crypto_payment == 'complete') {
                $neworder = getOrder($ref_id);
                $order = (json_encode($neworder, true));
                return view("confirmation", ["order_array" => $order]);
            }
        } else {

        // $payment_param_result = Input::get('crypto_payment'); // returns true if value exists
        // if($payment_param_result){
        //     dd($payment_param_result);
        // }

        // else {
            
        // }
        
        $neworder = getOrder($ref_id);
            $order = (json_encode($neworder, true));
            return view("hpp", ["order_array" => $order]);

        }
        
        
    }

    public function crypto_payment_old2()
    {
        $resourceUrl = 'https://test.bitpay.com/invoices';

        $postData = json_encode([
            'currency' => 'USD',
            'price' => 10,
            'orderId' => '20210511_fghij',
            'notificationURL' => 'https://merchantwebsite.com/shop/notifications',
            'redirectURL' => 'https://merchantwebsite.com/shop/return',
            'buyer' => [
                'email' => 'john@doe.com'
            ],
            'token' => 'CJnPvUDGfzR73c8Gp3rFczUZKhqLtudi3QvUPRx7qsue'
        ]);

        $curlCli = curl_init($resourceUrl);

        curl_setopt($curlCli, CURLOPT_HTTPHEADER, [
            'X-Accept-Version: 2.0.0',
            'Content-Type: application/json'
        ]);

        curl_setopt($curlCli, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($curlCli, CURLOPT_POSTFIELDS, stripslashes($postData));

        $result = curl_exec($curlCli);
        $resultData = json_decode($result, TRUE);
        curl_close($curlCli);




        dd($resultData);
    }

    public function crypto_payment()
    {       
        // dd(request()->post('total_currency'));
        $post_variables = request()->post();
        $notify_url = 'http://localhost/hpp2/'. $post_variables['order_id'];
        $redirect_url = 'http://localhost/hpp2/'. $post_variables['order_id'] . '?crypto_payment=complete';
        $close_url = 'http://localhost/hpp2/'. $post_variables['order_id'];
        // dd($post_variables);

        $json_array = [
            'currency' => $post_variables['total_currency'],
            'price' => $post_variables['total_amount'],
            'orderId' => $post_variables['order_id'],
            'notificationURL' => $notify_url,
            'redirectURL' => $redirect_url,
            'closeURL' => $close_url,
            'buyer' => [
                'email' => 'justin.jones@cellpointdigital.com'
            ],
            'token' => 'CJnPvUDGfzR73c8Gp3rFczUZKhqLtudi3QvUPRx7qsue'
        ];

        $json_rq = json_encode($json_array);

        $headers = [
            'Content-Type' => 'application/json',
            'X-Accept-Version: 2.0.0',
            // 'AccessToken' => 'key',
            // 'Authorization' => 'Bearer token',
        ];


        $client = new \GuzzleHttp\Client([
            'headers' => $headers
        ]);


        $url = 'https://test.bitpay.com/invoices';
        
        $response = $client->request('POST', $url, [
        'headers' => [
        'Content-Type' => 'application/json'
        ],
        'body' => $json_rq
        ]);

        $body = $response->getBody()->getContents();
        $body = json_decode($body,true);
        // dd($body);

        // dd($redirectURL = $body['data']['paymentCodes']['BTC']['BIP73']);
        $redirectURL = $body['data']['paymentCodes']['BTC']['BIP73'];

        // redirect()->route($redirectURL);
        // return Redirect::to($redirectURL);
        return Redirect::away($redirectURL);
        // Redirect::away($redirectURL);

    }

    public function crypto_payment_old1()
    {
        // dd($_REQUEST);
        // Provide the full path to the env file which you have previously stored securely.
        $bitpay = \BitPaySDK\Client::create()->withFile("BitPay_config.json");

        // Initialize with separate variables 
        // and Private Key stored in file.

        $bitpay = BitPaySDK\Client::create()->withData(
            BitPaySDK\Env . Test,
            "[FULL_PATH_TO_THE_PRIVATE_KEY]",
            new BitPaySDK\Tokens(
                "7UeQtMcsHamehE4gDZojUQbNRbSuSdggbH17sawtobGJ", //merchant
                "5j48K7pUrX5k59DLhRVYkCupgw2CtoEt8DBFrHo2vW47" //payroll
            ),
            "YourMasterPassword" //used to decrypt your private key, if encrypted
        );

        dd($bitpay);
        // $bitpay = Bitpay\sdklight\Client("98hHmUNVXHXTMWjyBQbiyeNtpSmot8x1pDLP41EZT3qH", BitPaySDKLight\Env::Test);

        // $bitpay = new \vendor\bitpay\sdk_light\src\BitPaySDKLight\Client("CFJCZH3VitcEER9Uybx8LMvkPsSWzpSWvN4vhNEJp47b", BitPaySDKLight\Env::Test);
        // D:\xampp\htdocs\jade\livewire_hpp\vendor\bitpay\sdk-light\src\BitPaySDKLight\Client.php
        // $bitpay = \BitPaySDK\Client::create()->withFile("{{ asset('BitPay_config.json') }}");


        // Provide the full path to the env file which you have previously stored securely.




    }
}
