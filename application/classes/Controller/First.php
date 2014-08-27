<?php defined('SYSPATH') or die('No direct script access.');

class Controller_First extends Controller {

	public function before()
	{
		parent::before();
	}

	public function action_index()
	{
		$data['name'] = 'Yuriy Myrosh!';
		$view = View::factory('first',$data);

		$request = Request::factory('first/test')->execute();

		$this->response->body($view);
	}

	public function action_test()
	{
		$this->response->body('test');
	}

	public function after()
	{
		parent::after();
	}

}// End First
