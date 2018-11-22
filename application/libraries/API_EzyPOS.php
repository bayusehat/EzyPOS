<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class api_ezypos
{

	protected $CI;

	public function __construct(){
		$this->CI =& get_instance();
		$this->CI->load->library('user_agent');
	}		

	protected function request($key, $url, $body){

		$headers = array(
			'Content-type' => 'application/json'
		);

		if ($key) {
			foreach ($key as $id => $value) {
				$headers[$id] = $value;
			}
		}
		
		$client = new GuzzleHttp\Client(['base_uri' => API_URL]);
		
		$res = $client->post($url, [
			'body' => json_encode($body),
			'headers' => $headers,
			'http_errors' => false
		]);	

		return json_decode($res->getBody()->read(1024));			

	}

	public function test(){
		return $this->request(null, "/", null);			
	}

	/* Member Login */

	public function	Login($NoHP, $Password){

		$key = array(
			"X-App-Key" => APP_KEY,
			"X-App-Secret" => APP_SECRET
		);

		$body = (object)[
			"username" => $NoHP, 
			"password" => $Password
		];		

		return $this->request($key, "auth/login", $body);
		
	}

	public function	Logout($key){
		$key = array(
			"Authentication" => "Bearer $key"
		);
		
		return $this->request($key, "Logout", NULL, FORMAT_RESULT);		
	}	

	public function GetDataMaster($apikey)
	{
		$apikey = array(
			"X-Api-key" => API_KEY , 
		);

		return $this->request($apikey,"master/type",NULL,FORMAT_RESULT);
	}

	public function getItem($key)
	{
		$key = array(
			"Authorization" => "Bearer $key" 
		);

		return $this->request($key,"item/read",NULL,FORMAT_RESULT);
	}
}
/* End of file API_EzyPay */
/* Location: ./application/libraries/API_EzyPay */
