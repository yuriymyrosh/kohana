<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Twitter extends Controller {

	public function before()
	{
		parent::before();

		require APPPATH."vendor/twitter/twitteroauth/twitteroauth.php";

	}

	public function action_index()
	{
// 		$connection = new TwitterOAuth('D1eMOfjolaDlSnbEvvuwCe5Ct', '2eTG6eCHMJmaGjdshZcd7YRgiGaH8XweCSgft4KlTrtDwj5oB1');
// 		$temporary_credentials = $connection->getRequestToken('');
// 		// echo "<pre>";
// 		// print_r($redirect_url = $connection->getAuthorizeURL($temporary_credentials));
// 		// echo "</pre>";
// // 5235676

// 		$connection->post('statuses/update', array('status' => 'Text of status here'));
	}
}
?>