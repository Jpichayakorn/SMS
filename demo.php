<?php
    if(isset($name->$_POST['name'],
        $email->$_POST['email'],$phone->$_POST['phone'],
        $message->$_POST['message'])){

    require $_SERVER['DOCUMENT_ROOT'].'/php.api-sms/autoload.php';
    $MessageBird = new \MessageBird\Client('jsPaB8Ju2ypY8lbh4nJoy0eAy
    ');
  $Message = new \MessageBird\Objects\Message();
  $Message->originator = 'TestMessage';
  $Message->recipients = array($phone);
  $Message->body = 'message';
  $Message->body = 'email';
  $Message->body = 'name';

  print_r(json_encode($MessageBird->messages->create($Message)));
}


// class Sms extends CI_Controller {
	
// 	public function __construct() {
//         parent::__construct();
// 		$this->load->library('unit_test');
//     }
// 	public function sendSMS(){
// 		$to = "660933141999"; // รหัสประเทศไทย 66 และตามด้วยเบอร์ที่จะส่งข้อความไป
// 		$from = "codebee";
// 		$api_key = "40e259a5"; // api key เอาจากหน้า dashboard
// 		$api_secret = "*************"; // secret key เอาจากหน้า dashboard
// 		$text = "Hello PHP SMS"; // ข้อความที่จะส่ง
		
// 		$fields = array( 'api_key'=>$api_key, 'api_secret'=>$api_secret, 'from'=>$from, 'to'=>$to, 'text'=>$text);
// 	    $POST = '';
// 	    foreach($fields as $key=>$value) {
// 		  $POST .= $key . "=" . $value . "&";
// 	    }
//         $url = 'https://rest.nexmo.com/sms/json';

// $ch = curl_init($url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $POST);
// $response = curl_exec($ch);
// echo($response);
