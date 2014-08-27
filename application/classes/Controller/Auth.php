<?php  defined('SYSPATH') or die('No direct script access.');
	/**
	*
	*/
	class Controller_Auth extends Controller
	{

		public function action_index()
		{
			if ($this->request->post('username')
				&& $this->request->post('password')
				&& Auth::instance()->login($this->request->post('username'), $this->request->post('password')))
			{
				$this->redirect('first');
			}
			$this->response->body(View::factory('login'));
		}

		public function action_logout()
		{
			Auth::instance()->logout();
			$this->redirect('auth');
		}

		public function action_signin()
		{
			$user = ORM::factory('User');
			$user->username = 'Konro1';
			$user->email    = 'yuriy.myrosh@lemberg.co.uk';
			$user->password = '123456';



			$user->save();
			$user->add('roles',ORM::factory('Role', array('name' => 'login')));
			$user->save();
		}
	}
?>