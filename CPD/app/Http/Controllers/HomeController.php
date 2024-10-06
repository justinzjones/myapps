<?php



namespace App\Http\Controllers;

use GuzzleHttp\Client;


use Illuminate\Http\Request;


class HomeController extends Controller
{

    public function spreedly()
    {
        return view('spreedly');
    }

    public function spreedly_checkoot()
    {
        dd($_REQUEST);
        // dd($_REQUEST['payment_method_token']);
        // return view('checkoot');

        // $json_rq = json_encode($_REQUEST);
        // // dd($json_rq);

        // $headers = [
        //     'Content-Type' => 'application/json',
        //     // 'AccessToken' => 'key',
        //     'Authorization' => 'Basic 5WeMoCpoorOaBHcoT4JWtzMK1ZH',
        // ];

        // $client = new \GuzzleHttp\Client([
        //     'headers' => $headers
        // ]);


        // $url = 'https://core.spreedly.com/v1/gateways/<gateway_token>/authorize.json';
        
        // $response = $client->request('POST', $url, [
        // 'headers' => [
        // 'Content-Type' => 'application/json'
        // ],
        // 'body' => $json_rq
        // // ]);


    }

    public function elements2()
    {
        
        \Stripe\Stripe::setApiKey('sk_test_51HNSO7K8qsgPu2RTxnjK9WkJkvx6visnPYnxLT1anhlziJMtslCx0yxFqI1SfiCa4tIbDtDR4BsNQt7QqWkPUTar00j1w10RYT');

        $intent = \Stripe\PaymentIntent::create([
            'amount' => 7552,
            'currency' => 'usd',
            // Verify your integration in this guide by including this parameter
            'metadata' => ['integration_check' => 'accept_a_payment'],
        ]);
        // dd($intent);

        return view('stripe-elements')->with('intent', $intent);
    }

    public function stripec_init() {
        
        // This is a sample test API key.
        \Stripe\Stripe::setApiKey('sk_test_51HNSO7K8qsgPu2RTxnjK9WkJkvx6visnPYnxLT1anhlziJMtslCx0yxFqI1SfiCa4tIbDtDR4BsNQt7QqWkPUTar00j1w10RYT');

        function calculateOrderAmount(array $items): int {
            // Replace this constant with a calculation of the order's amount
            // Calculate the order total on the server to prevent
            // people from directly manipulating the amount on the client
            return 1400;
        }

        header('Content-Type: application/json');

        try {
            // retrieve JSON from POST body
            $jsonStr = file_get_contents('php://input');
            $jsonObj = json_decode($jsonStr);

            // Create a PaymentIntent with amount and currency
            $paymentIntent = \Stripe\PaymentIntent::create([
                'amount' => 1000,
                'currency' => 'eur',
                'automatic_payment_methods' => [
                    'enabled' => true,
                ],
            ]);

            $output = [
                'clientSecret' => $paymentIntent->client_secret,
            ];
            dd($output);

            echo json_encode($output);
        } catch (Error $e) {
            http_response_code(500);
            echo json_encode(['error' => $e->getMessage()]);
        }

    }

    public function stripec()
    {
          

        // dd($intent);

        return view('stripe-elements');

    }

    public function elements()
    {
        \Stripe\Stripe::setApiKey('sk_test_51HNSO7K8qsgPu2RTxnjK9WkJkvx6visnPYnxLT1anhlziJMtslCx0yxFqI1SfiCa4tIbDtDR4BsNQt7QqWkPUTar00j1w10RYT');

        $intent = \Stripe\PaymentIntent::create(
            [
                'amount' => 7552,
                'currency' => 'eur',
                'payment_method_types' => [
                    'bancontact',
                    'card',
                    'eps',
                    'giropay',
                    'ideal',
                    'p24',
                    'sepa_debit',
                    'sofort',
                ],
            ]
        );

        $id = $intent['id'];
        return view('stripe-elements')
            ->with('intent', $intent)
            ->with('id', $id);
    }


    public function create_pi()
    {

        // require '/vendor/autoload.php';

        // This is a sample test API key.
        \Stripe\Stripe::setApiKey('sk_test_51HNSO7K8qsgPu2RTxnjK9WkJkvx6visnPYnxLT1anhlziJMtslCx0yxFqI1SfiCa4tIbDtDR4BsNQt7QqWkPUTar00j1w10RYT');


        function calculateOrderAmount(array $items): int
        {
            // Replace this constant with a calculation of the order's amount
            // Calculate the order total on the server to prevent
            // people from directly manipulating the amount on the client
            return 7552;
        }

        header('Content-Type: application/json');

        try {
            // retrieve JSON from POST body
            $jsonStr = file_get_contents('php://input');
            $jsonObj = json_decode($jsonStr);

            // Create a PaymentIntent with amount and currency
            $paymentIntent = \Stripe\PaymentIntent::create([
                'amount' => 1700,
                'currency' => 'eur',
                'payment_method_types' => [
                    'giropay',
                    'eps',
                    'p24',
                    'sofort',
                    'sepa_debit',
                    'card',
                    'bancontact',
                    'ideal'
                ],
            ]);

            $output = [
                'clientSecret' => $paymentIntent->client_secret,
            ];

            echo json_encode($output);
        } catch (Error $e) {
            http_response_code(500);
            echo json_encode(['error' => $e->getMessage()]);
        }
    }

    public function index()
    {

        $headers = [
            'Content-Type' => 'application/json',
            // 'AccessToken' => 'key',
            // 'Authorization' => 'Bearer token',
        ];

        $client = new \GuzzleHttp\Client([
            'headers' => $headers
        ]);

        $url = 'http://localhost:8055/items/posts';

        $response = $client->request('GET', $url, [
            'headers' => [
                'Content-Type' => 'application/json'
            ]
            // 'body' => $json_rq
        ]);

        // $this->body = "Justin";
        //get the content from the body of the response
        $posts_tmp = $response->getBody()->getContents();
        $posts_tmp2 = json_decode($posts_tmp, true);
        $posts = $posts_tmp2['data'];

        // add the link to each post array in the $posts array
        foreach ($posts as $key => &$val) {
            // dd($val['id']);
            // $val['postURL'] = 'http://localhost:8055/items/posts/'.$val['id'];
            $val['postURL'] = ('/post/' . $val['id']);
        }

        // dd($posts);
        return view('taiga-index')->with('posts', $posts);
        // dd($this->body);


    }

    public function index2()
    {

        $headers = [
            'Content-Type' => 'application/json',
            // 'AccessToken' => 'key',
            // 'Authorization' => 'Bearer token',
        ];

        $client = new \GuzzleHttp\Client([
            'headers' => $headers
        ]);

        $url = 'http://localhost:8055/items/posts';

        $response = $client->request('GET', $url, [
            'headers' => [
                'Content-Type' => 'application/json'
            ]
            // 'body' => $json_rq
        ]);

        // $this->body = "Justin";
        //get the content from the body of the response
        $posts_tmp = $response->getBody()->getContents();
        $posts_tmp2 = json_decode($posts_tmp, true);
        $posts = $posts_tmp2['data'];

        // add the link to each post array in the $posts array
        foreach ($posts as $key => &$val) {
            // dd($val['id']);
            // $val['postURL'] = 'http://localhost:8055/items/posts/'.$val['id'];
            $val['postURL'] = ('/post/' . $val['id']);
        }

        // dd($posts);
        return view('taiga-index2')->with('posts', $posts);
        // dd($this->body);


    }


    public function sdk_review()
    {

        return view('sdk-review');

    }

    public function sdk_pay()
    {

        // $uuid = uuid();
        $arr = array("username" => "rtxchange",
        "password" => "testing");
        $auth = json_encode($arr); 
        $client = new \GuzzleHttp\Client();
        // $url = 'https://hpp2.dev-01.cellpoint.dev/api/oauth/token';
        $url = 'https://rtxchange.dih.uat-01.cellpointmobile.net/oauth/token';
        // $url = 'https://abc.dih.dev.cpm.dev/oauth/token'; <-- this was working

        
        
        // dd($raw);
        
        $response = $client->post($url, [
            'body' => $auth,  
            'headers' => [
            'Content-Type' => 'application/json',
            ],     
        ]);

        
        $token_array =  json_decode($response->getBody()->getContents(), true);
        $token = trim($token_array['access_token']);
        // dd($token);
        
        //initialize the payment
        $client_init = new \GuzzleHttp\Client();
        // $url_init = 'https://hpp2.dev-01.cellpoint.dev/api/payment/initialize';
        // $url_init = 'https://rtx.dih.uat-01.cellpoint.dev/payment/initialize';
        // $url_init = 'https://abc.dih.dev.cpm.dev/api/payment/initialize';
        // $url_init = 'https://rtxchange.dih.uat-01.cellpointmobile.net/init_payment';
        // $url_init = 'https://abc.dih.dev.cpm.dev/payment/initialize'; <-- this was working
        $url_init = 'https://rtxchange.dih.uat-01.cellpointmobile.net/payment/initialize'; 
        
        
        $bdy = array (
            'client_id' => 10103,
            'account' => 101030,
            'transaction' => 
            array (
              'product_type' => '100',
              'order_no' => '75644af7-77d7-4f9a-aeb5-4bbc17ef3142',
              'type_id' => '40',
              'amount' => 
                array (
                    'country' => 'SG',
                    'currency' => 'USD',
                    'value' => 4532,
                ),
            ),
            'client_info' => 
            array (
              'language' => 'us',
              'platform' => 'HTML5',
              'version' => '1.00',
              'mobile' => 
              array (
                'country' => 'DK',
                'operator_id' => '10000',
                'value' => '4500112233',
              ),
              'email' => 
                array (
                    'value' => 'test@example.com',
                ),
            ),
        );
        
        $initRaw = json_encode($bdy);
        // dd($initRaw);
        $authorization = 'Bearer ' . $token;    
        // dd($authorization);   

        $response2 = $client_init->post($url_init, [
            'headers' => [
            // 'Host-resolver' => 'rtx.mesb.dev.cpm.dev',
            'Host-resolver' => 'rtx.uat-01.cellpointmobile.net',
            'Authorization' => $authorization,
            'Content-Type' => 'application/json',
            ],  
            'body' => $initRaw,
            'redirect' => 'follow'   
        ]);

        // dd($response2);
        $init_pay = $response2;
        
        
        $init_pay = json_decode($response2->getBody()->getContents(), true);
        // dd($init_pay);
        // $init_pay = $response2;
        // dd($init_pay['cards']);
        $cardsMeta = json_encode($init_pay['cards']['card']);
        // dd($cardsMeta);
        
        
        return view('sdk-pay', [ 'init_pay' => $init_pay,'token' => $token, 'cardsMeta' => $cardsMeta ]);

        


    }


   
}
