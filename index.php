<?php
// class Sms extends CI_Controller {
	
// 	public function __construct() {
//         parent::__construct();
// 		$this->load->library('unit_test');
//     }
// 	public function sendSMS(){
// 		$to = "66933141999"; // รหัสประเทศไทย 66 และตามด้วยเบอร์ที่จะส่งข้อความไป
// 		$from = "Vonage APIs";
// 		$api_key = "40e259a5"; // api key เอาจากหน้า dashboard
// 		$api_secret = "3EfVadrnkwZeBuBl"; // secret key เอาจากหน้า dashboard
// 		$text = "Hello PHP SMS"; // ข้อความที่จะส่ง
		
// 		$fields = array( 'api_key'=>$api_key, 'api_secret'=>$api_secret, 'from'=>$from, 'to'=>$to, 'text'=>$text);
// 	    $POST = '';
// 	    foreach($fields as $key=>$value) {
// 		  $POST .= $key . "=" . $value . "&";
// 	    }
//         $url = 'https://rest.nexmo.com/sms/json';
//     $ch = curl_init($url);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, $POST);
//     $response = curl_exec($ch);
//     echo($response);
        
//   if (isset($_POST['submit'])){
//     $name =$_POST['name']; $email =$_POST['email'];
//     $phone =$_POST['phone']; $message = $_POST['message'];

// if (isset($_POST['send'])) {
//     $baseUrl = "https://api-v2.thaibulksms.com/sms/";

//     $ch = curl_init($baseUrl);
//     $data = array(
//         'api_key' => '7778ed15bc2a8d0baaf6ba20efc1007e',
//         'username' => 'pichayakorn',
//         'sender_id' => 'MySMS',
//         'message' => $_POST['message'],
//         'phone' => $_POST['phone']
//     );
//     $payload = json_encode($fields);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
//     curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json', 'Accept:application/json'));
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//    $model->result = json_encode(curl_exec($ch));
//     foreach ($result as $key=>$value) {
//         // $_POST.=$key."=".$value."&"
//         echo "$value <br>";
//     }
//     curl_close($ch);
// }

// namespace THAIBULKSMS_API\SMS;

// class SMS
// {
//     private $api;

//     private $token;

//     public function __construct($apiKey = '', $apiSecretKey = '', $options = [])
//     {
//         $this->token = base64_encode("$apiKey:$apiSecretKey");
//         $this->api = array_key_exists('api', $options) ? $options['api'] : 'https://api-v2.thaibulksms.com';
//     }

//     public function sendSMS($body = [])
//     {
//         if (!is_array($body)) {
//             die("Body rquire array");
//         }

//         return $this->cURL($body);
//     }

//     private function cURL($body = [])
//     {
//         $curl = curl_init();
//         curl_setopt_array($curl, array(
//             CURLOPT_URL =>  "$this->api/sms",
//             CURLOPT_RETURNTRANSFER => true,
//             CURLOPT_ENCODING => '',
//             CURLOPT_MAXREDIRS => 10,
//             CURLOPT_TIMEOUT => 30,
//             CURLOPT_FOLLOWLOCATION => true,
//             CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//             CURLOPT_CUSTOMREQUEST => 'POST',
//             CURLOPT_POSTFIELDS => http_build_query($body),
//             CURLOPT_HTTPHEADER => array(
//                 'Content-Type: application/x-www-form-urlencoded',
//                 'Authorization: Basic ' .  $this->token
//             ),
//         ));

//         $response = curl_exec($curl);
//         $httpStatusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

//         curl_close($curl);

//         $resData = json_decode($response);
        
//         $res = (object)[
//             'httpStatusCode' => $httpStatusCode
//         ];

//         if ($httpStatusCode == 201) {
//             $res->data = $resData;
//         } else {
//             $res->error = $resData->error;
//         }
//         return $res;
//     }
// }
//         composer require vonage/client;
//         $basic  = new \Vonage\Client\Credentials\Basic("40e259a5", "3EfVadrnkwZeBuBl");
//         $client = new \Vonage\Client($basic);
//         $response = $client->sms()->send(
//     new \Vonage\SMS\Message\SMS("66933141999", BRAND_NAME, 'A text message sent using the Nexmo SMS API')
// );

// $message = $response->current();

// if ($message->getStatus() == 0) {
//     echo "The message was sent successfully\n";
// } else {
//     echo "The message failed with status: " . $message->getStatus() . "\n";
// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sending SMS by PHP&API</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

<body>
    <div class="container">
        <h1>Send Message</h1>

        <form action="demo.php" method="POST">
            <div class="form-group">
                <label for="text">NAME :</label>
                <input type="text" class="form-control" id="name" name="name" autofocus>
            </div>

            <div class="form-group">
                <label for="text">EMAIL :</label>
                <input type="text" class="form-control" id="email" name="email" autofocus>
            </div>

            <div class="form-group">
                <label for="text">NUMBER PHONE :</label>
                <input type="text" class="form-control" id="phone" name="phone" autofocus>
            </div>

            <div class="form-group">
                <label for="comment">MESSAGE :</label>
                <textarea type="text" class="form-control" id="message" name="message"></textarea>
            </div>

            <button type="submit" class="btn btn-primary" name="send">submit</button>

        </form>

        <form class="responsive">
            <div class="section">
                <h1>Responsive test</h1>
                <br>
                <!-- img -->
                <div class="work-item">
                    <div class="thumb">
                        <div class="thumb-img">
                            <img src="img/158201674_256585585948810_958716075033693635_n.jpg" class="fluid-img">
                        </div>
                    </div><!-- thumb -->
                </div><!-- work-item -->
                <div class="work-item">
                    <div class="thumb">
                        <div class="thumb-img">
                            <img src="img/187586492_308996324026133_4287046649856484730_n.jpg" class="fluid-img">
                        </div>
                    </div><!-- thumb -->
                </div><!-- work-item -->
                <div class="work-item">
                    <div class="thumb pro">
                        <div class="thumb-img">
                            <img src="img/194210979_478579463367059_7894214674729415724_n.jpg" class="fluid-img">
                        </div>
                    </div><!-- thumb -->
                </div><!-- work-item -->
                <div class="work-item">
                    <div class="thumb pro">
                        <div class="thumb-img">
                            <img src="img/IMG_8642.JPG" class="fluid-img">
                        </div>
                    </div><!-- thumb -->
                </div><!-- work-item -->
                <div class="work-item">
                    <div class="thumb pro">
                        <div class="thumb-img">
                            <img src="img/IMG_8631.JPG" class="fluid-img">
                        </div>
                    </div><!-- thumb -->
                </div><!-- work-item -->

                <div class="work-item">
                    <div class="thumb dis">
                        <div class="thumb-img">
                            <img src="img/IMG_8883.JPG" class="fluid-img">
                        </div>
                    </div><!-- thumb -->
                </div><!-- work-item -->

                <!-- <div class="section2">
                    <div id="thumb">
                        <input placeholder="Name" class="input n" type="text" name="firstname">
                    </div>
                    <div id="thumb">
                        <input placeholder="Lastname" class="input l" type="text" name="lastname">
                    </div>
                    <div id="thumb">
                        <input placeholder="Email" class="input e" type="email" name="email">
                    </div>
                    <div id="thumb">
                        <input placeholder="Phon Number" class="input ph" type="text" name="number" autofocus>
                    </div>
                    <div id="thumb">
                        <input placeholder="Massage" class="input m" type="message" name="message">
                    </div>
                </div>

                <div class="bg-botton">
                    <button type="submit" value="submit" class="button">ส่งข้อความ</button>
                </div> -->
            </div>
        </form>
    </div>
</body>
</html>