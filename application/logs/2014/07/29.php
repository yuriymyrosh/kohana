<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-07-29 14:25:05 --- EMERGENCY: View_Exception [ 0 ]: The requested view first could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /srv/www/kohana.loc/system/classes/Kohana/View.php:137
2014-07-29 14:25:05 --- DEBUG: #0 /srv/www/kohana.loc/system/classes/Kohana/View.php(137): Kohana_View->set_filename('first')
#1 /srv/www/kohana.loc/system/classes/Kohana/View.php(30): Kohana_View->__construct('first', Array)
#2 /srv/www/kohana.loc/application/classes/Controller/First.php(8): Kohana_View::factory('first', Array)
#3 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_First->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_First))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/kohana.loc/system/classes/Kohana/View.php:137