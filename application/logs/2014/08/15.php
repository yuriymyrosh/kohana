<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-15 17:38:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Request::$body ~ APPPATH/classes/Controller/First.php [ 18 ] in /srv/www/kohana.loc/application/classes/Controller/First.php:18
2014-08-15 17:38:41 --- DEBUG: #0 /srv/www/kohana.loc/application/classes/Controller/First.php(18): Kohana_Core::error_handler(8, 'Undefined prope...', '/srv/www/kohana...', 18, Array)
#1 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_First->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_First))
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/kohana.loc/application/classes/Controller/First.php:18
2014-08-15 17:39:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Response::$body ~ APPPATH/classes/Controller/First.php [ 18 ] in /srv/www/kohana.loc/application/classes/Controller/First.php:18
2014-08-15 17:39:57 --- DEBUG: #0 /srv/www/kohana.loc/application/classes/Controller/First.php(18): Kohana_Core::error_handler(8, 'Undefined prope...', '/srv/www/kohana...', 18, Array)
#1 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_First->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_First))
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/kohana.loc/application/classes/Controller/First.php:18
2014-08-15 17:43:04 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::response() ~ APPPATH/classes/Controller/First.php [ 18 ] in file:line
2014-08-15 17:43:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-15 18:09:19 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::response() ~ APPPATH/classes/Controller/First.php [ 18 ] in file:line
2014-08-15 18:09:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-15 18:10:26 --- EMERGENCY: Kohana_Exception [ 0 ]: Controller failed to return a Response ~ SYSPATH/classes/Kohana/Request/Client/Internal.php [ 102 ] in /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php:114
2014-08-15 18:10:26 --- DEBUG: #0 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#1 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#2 /srv/www/kohana.loc/application/classes/Controller/First.php(16): Kohana_Request->execute()
#3 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_First->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_First))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php:114
2014-08-15 18:16:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_REST' not found ~ APPPATH/classes/Controller/First.php [ 3 ] in file:line
2014-08-15 18:16:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-08-15 18:18:40 --- EMERGENCY: View_Exception [ 0 ]: The requested view test1 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /srv/www/kohana.loc/system/classes/Kohana/View.php:137
2014-08-15 18:18:40 --- DEBUG: #0 /srv/www/kohana.loc/system/classes/Kohana/View.php(137): Kohana_View->set_filename('test1')
#1 /srv/www/kohana.loc/system/classes/Kohana/View.php(30): Kohana_View->__construct('test1', NULL)
#2 /srv/www/kohana.loc/application/classes/Controller/First.php(22): Kohana_View::factory('test1')
#3 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_First->action_test()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_First))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/kohana.loc/system/classes/Kohana/View.php:137
2014-08-15 18:31:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Response::$body ~ APPPATH/classes/Controller/First.php [ 17 ] in /srv/www/kohana.loc/application/classes/Controller/First.php:17
2014-08-15 18:31:01 --- DEBUG: #0 /srv/www/kohana.loc/application/classes/Controller/First.php(17): Kohana_Core::error_handler(8, 'Undefined prope...', '/srv/www/kohana...', 17, Array)
#1 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_First->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_First))
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/kohana.loc/application/classes/Controller/First.php:17
2014-08-15 18:31:28 --- EMERGENCY: View_Exception [ 0 ]: The requested view test could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /srv/www/kohana.loc/system/classes/Kohana/View.php:137
2014-08-15 18:31:28 --- DEBUG: #0 /srv/www/kohana.loc/system/classes/Kohana/View.php(137): Kohana_View->set_filename('test')
#1 /srv/www/kohana.loc/system/classes/Kohana/View.php(30): Kohana_View->__construct('test', NULL)
#2 /srv/www/kohana.loc/application/classes/Controller/First.php(25): Kohana_View::factory('test')
#3 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_First->action_test()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_First))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/kohana.loc/application/classes/Controller/First.php(15): Kohana_Request->execute()
#9 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_First->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_First))
#12 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#15 {main} in /srv/www/kohana.loc/system/classes/Kohana/View.php:137
2014-08-15 18:31:33 --- EMERGENCY: View_Exception [ 0 ]: The requested view test could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /srv/www/kohana.loc/system/classes/Kohana/View.php:137
2014-08-15 18:31:33 --- DEBUG: #0 /srv/www/kohana.loc/system/classes/Kohana/View.php(137): Kohana_View->set_filename('test')
#1 /srv/www/kohana.loc/system/classes/Kohana/View.php(30): Kohana_View->__construct('test', NULL)
#2 /srv/www/kohana.loc/application/classes/Controller/First.php(25): Kohana_View::factory('test')
#3 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_First->action_test()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_First))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/kohana.loc/application/classes/Controller/First.php(15): Kohana_Request->execute()
#9 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_First->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_First))
#12 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#15 {main} in /srv/www/kohana.loc/system/classes/Kohana/View.php:137
2014-08-15 18:31:42 --- EMERGENCY: View_Exception [ 0 ]: The requested view test could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /srv/www/kohana.loc/system/classes/Kohana/View.php:137
2014-08-15 18:31:42 --- DEBUG: #0 /srv/www/kohana.loc/system/classes/Kohana/View.php(137): Kohana_View->set_filename('test')
#1 /srv/www/kohana.loc/system/classes/Kohana/View.php(30): Kohana_View->__construct('test', NULL)
#2 /srv/www/kohana.loc/application/classes/Controller/First.php(25): Kohana_View::factory('test')
#3 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_First->action_test()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_First))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/kohana.loc/application/classes/Controller/First.php(15): Kohana_Request->execute()
#9 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_First->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_First))
#12 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#15 {main} in /srv/www/kohana.loc/system/classes/Kohana/View.php:137
2014-08-15 18:31:52 --- EMERGENCY: View_Exception [ 0 ]: The requested view test could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /srv/www/kohana.loc/system/classes/Kohana/View.php:137
2014-08-15 18:31:52 --- DEBUG: #0 /srv/www/kohana.loc/system/classes/Kohana/View.php(137): Kohana_View->set_filename('test')
#1 /srv/www/kohana.loc/system/classes/Kohana/View.php(30): Kohana_View->__construct('test', NULL)
#2 /srv/www/kohana.loc/application/classes/Controller/First.php(25): Kohana_View::factory('test')
#3 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_First->action_test()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_First))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/kohana.loc/application/classes/Controller/First.php(15): Kohana_Request->execute()
#9 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_First->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_First))
#12 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#15 {main} in /srv/www/kohana.loc/system/classes/Kohana/View.php:137
2014-08-15 18:32:01 --- EMERGENCY: View_Exception [ 0 ]: The requested view test could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /srv/www/kohana.loc/system/classes/Kohana/View.php:137
2014-08-15 18:32:01 --- DEBUG: #0 /srv/www/kohana.loc/system/classes/Kohana/View.php(137): Kohana_View->set_filename('test')
#1 /srv/www/kohana.loc/system/classes/Kohana/View.php(30): Kohana_View->__construct('test', NULL)
#2 /srv/www/kohana.loc/application/classes/Controller/First.php(25): Kohana_View::factory('test')
#3 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_First->action_test()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_First))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/kohana.loc/application/classes/Controller/First.php(15): Kohana_Request->execute()
#9 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_First->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_First))
#12 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#15 {main} in /srv/www/kohana.loc/system/classes/Kohana/View.php:137
2014-08-15 18:32:27 --- EMERGENCY: View_Exception [ 0 ]: The requested view test could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /srv/www/kohana.loc/system/classes/Kohana/View.php:137
2014-08-15 18:32:27 --- DEBUG: #0 /srv/www/kohana.loc/system/classes/Kohana/View.php(137): Kohana_View->set_filename('test')
#1 /srv/www/kohana.loc/system/classes/Kohana/View.php(30): Kohana_View->__construct('test', NULL)
#2 /srv/www/kohana.loc/application/classes/Controller/First.php(28): Kohana_View::factory('test')
#3 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_First->action_test()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_First))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/kohana.loc/application/classes/Controller/First.php(15): Kohana_Request->execute()
#9 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_First->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_First))
#12 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#15 {main} in /srv/www/kohana.loc/system/classes/Kohana/View.php:137
2014-08-15 18:32:32 --- EMERGENCY: View_Exception [ 0 ]: The requested view test could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /srv/www/kohana.loc/system/classes/Kohana/View.php:137
2014-08-15 18:32:32 --- DEBUG: #0 /srv/www/kohana.loc/system/classes/Kohana/View.php(137): Kohana_View->set_filename('test')
#1 /srv/www/kohana.loc/system/classes/Kohana/View.php(30): Kohana_View->__construct('test', NULL)
#2 /srv/www/kohana.loc/application/classes/Controller/First.php(28): Kohana_View::factory('test')
#3 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_First->action_test()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_First))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/kohana.loc/application/classes/Controller/First.php(15): Kohana_Request->execute()
#9 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_First->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_First))
#12 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#15 {main} in /srv/www/kohana.loc/system/classes/Kohana/View.php:137