<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-08-20 16:36:04 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant APPATH - assumed 'APPATH' ~ APPPATH/classes/Controller/Twitter.php [ 8 ] in /srv/www/kohana.loc/application/classes/Controller/Twitter.php:8
2014-08-20 16:36:04 --- DEBUG: #0 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(8): Kohana_Core::error_handler(8, 'Use of undefine...', '/srv/www/kohana...', 8, Array)
#1 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(69): Controller_Twitter->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/kohana.loc/application/classes/Controller/Twitter.php:8
2014-08-20 16:38:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: access_token ~ APPPATH/vendor/twitter/index.php [ 16 ] in /srv/www/kohana.loc/application/vendor/twitter/index.php:16
2014-08-20 16:38:03 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/index.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 16, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(12): require('/srv/www/kohana...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(69): Controller_Twitter->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/index.php:16
2014-08-20 16:38:21 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: access_token ~ APPPATH/vendor/twitter/index.php [ 16 ] in /srv/www/kohana.loc/application/vendor/twitter/index.php:16
2014-08-20 16:38:21 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/index.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 16, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(12): require('/srv/www/kohana...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(69): Controller_Twitter->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/index.php:16
2014-08-20 16:38:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: access_token ~ APPPATH/vendor/twitter/index.php [ 19 ] in /srv/www/kohana.loc/application/vendor/twitter/index.php:19
2014-08-20 16:38:30 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/index.php(19): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 19, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(12): require('/srv/www/kohana...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(69): Controller_Twitter->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/index.php:19
2014-08-20 16:38:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: access_token ~ APPPATH/vendor/twitter/index.php [ 19 ] in /srv/www/kohana.loc/application/vendor/twitter/index.php:19
2014-08-20 16:38:58 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/index.php(19): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 19, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(12): require('/srv/www/kohana...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(69): Controller_Twitter->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/index.php:19
2014-08-20 16:39:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: access_token ~ APPPATH/vendor/twitter/index.php [ 16 ] in /srv/www/kohana.loc/application/vendor/twitter/index.php:16
2014-08-20 16:39:16 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/index.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 16, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(12): require('/srv/www/kohana...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(69): Controller_Twitter->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/index.php:16
2014-08-20 16:41:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: access_token ~ APPPATH/vendor/twitter/index.php [ 16 ] in /srv/www/kohana.loc/application/vendor/twitter/index.php:16
2014-08-20 16:41:27 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/index.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 16, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(12): require('/srv/www/kohana...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(69): Controller_Twitter->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/index.php:16
2014-08-20 16:41:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: access_token ~ APPPATH/vendor/twitter/index.php [ 16 ] in /srv/www/kohana.loc/application/vendor/twitter/index.php:16
2014-08-20 16:41:30 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/index.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 16, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(12): require('/srv/www/kohana...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(69): Controller_Twitter->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/index.php:16
2014-08-20 16:43:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: access_token ~ APPPATH/vendor/twitter/index.php [ 16 ] in /srv/www/kohana.loc/application/vendor/twitter/index.php:16
2014-08-20 16:43:30 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/index.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 16, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(12): require('/srv/www/kohana...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(69): Controller_Twitter->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/index.php:16
2014-08-20 16:43:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: access_token ~ APPPATH/vendor/twitter/index.php [ 16 ] in /srv/www/kohana.loc/application/vendor/twitter/index.php:16
2014-08-20 16:43:31 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/index.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 16, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(12): require('/srv/www/kohana...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(69): Controller_Twitter->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/index.php:16
2014-08-20 16:43:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: access_token ~ APPPATH/vendor/twitter/index.php [ 16 ] in /srv/www/kohana.loc/application/vendor/twitter/index.php:16
2014-08-20 16:43:31 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/index.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 16, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(12): require('/srv/www/kohana...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(69): Controller_Twitter->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/index.php:16
2014-08-20 16:43:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: access_token ~ APPPATH/vendor/twitter/index.php [ 16 ] in /srv/www/kohana.loc/application/vendor/twitter/index.php:16
2014-08-20 16:43:31 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/index.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 16, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(12): require('/srv/www/kohana...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(69): Controller_Twitter->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/index.php:16
2014-08-20 16:46:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 80 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 16:46:46 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 80, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 16:46:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 80 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 16:46:53 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 80, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 16:46:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 80 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 16:46:57 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 80, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 16:47:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: temporary_credentials ~ APPPATH/classes/Controller/Twitter.php [ 18 ] in /srv/www/kohana.loc/application/classes/Controller/Twitter.php:18
2014-08-20 16:47:08 --- DEBUG: #0 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/kohana...', 18, Array)
#1 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/kohana.loc/application/classes/Controller/Twitter.php:18
2014-08-20 16:49:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 80 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 16:49:46 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 80, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 16:49:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 80 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 16:49:51 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 80, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 16:50:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 83 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:83
2014-08-20 16:50:31 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(83): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 83, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:83
2014-08-20 16:51:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 80 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 16:51:25 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 80, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 16:51:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 83 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:83
2014-08-20 16:51:38 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(83): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 83, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:83
2014-08-20 16:51:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 83 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:83
2014-08-20 16:51:59 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(83): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 83, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:83
2014-08-20 16:52:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 86 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:86
2014-08-20 16:52:11 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(86): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 86, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:86
2014-08-20 16:52:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 83 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:83
2014-08-20 16:52:23 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(83): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 83, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:83
2014-08-20 16:54:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: TwitterOAuth::$oAuthRequest ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 79 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:79
2014-08-20 16:54:04 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(79): Kohana_Core::error_handler(8, 'Undefined prope...', '/srv/www/kohana...', 79, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:79
2014-08-20 16:54:10 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for TwitterOAuth::oAuthRequest(), called in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php on line 79 and defined ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 177 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:177
2014-08-20 16:54:10 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(177): Kohana_Core::error_handler(2, 'Missing argumen...', '/srv/www/kohana...', 177, Array)
#1 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(79): TwitterOAuth->oAuthRequest()
#2 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#3 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#9 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:177
2014-08-20 16:54:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 80 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 16:54:55 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 80, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 16:55:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 80 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 16:55:14 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 80, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 16:55:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 80 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 16:55:30 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 80, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 16:55:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 80 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 16:55:51 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 80, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 16:59:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 80 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 16:59:27 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 80, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 16:59:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 80 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 16:59:34 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 80, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 17:03:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 80 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 17:03:48 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 80, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 17:04:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 80 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 17:04:15 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 80, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 17:05:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 80 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 17:05:09 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 80, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 17:05:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 80 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 17:05:20 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 80, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 17:05:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 80 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 17:05:26 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 80, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 17:05:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 80 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 17:05:29 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 80, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 17:05:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 80 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 17:05:31 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 80, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 17:05:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 80 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 17:05:32 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 80, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 17:06:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 80 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 17:06:41 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 80, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 17:07:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 80 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 17:07:11 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 80, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 17:08:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 80 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 17:08:57 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 80, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 17:10:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 80 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 17:10:30 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 80, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 17:10:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 80 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 17:10:53 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 80, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 17:12:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 80 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 17:12:30 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(80): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 80, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:80
2014-08-20 17:12:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 83 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:83
2014-08-20 17:12:54 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(83): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 83, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:83
2014-08-20 17:14:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 83 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:83
2014-08-20 17:14:06 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(83): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 83, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:83
2014-08-20 17:14:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 83 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:83
2014-08-20 17:14:13 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(83): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 83, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:83
2014-08-20 17:14:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 83 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:83
2014-08-20 17:14:17 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(83): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 83, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:83
2014-08-20 17:15:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 83 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:83
2014-08-20 17:15:18 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(83): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 83, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:83
2014-08-20 17:15:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_token ~ APPPATH/vendor/twitter/twitteroauth/twitteroauth.php [ 83 ] in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:83
2014-08-20 17:15:46 --- DEBUG: #0 /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php(83): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 83, Array)
#1 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(16): TwitterOAuth->getRequestToken('http://kohana.l...')
#2 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#8 {main} in /srv/www/kohana.loc/application/vendor/twitter/twitteroauth/twitteroauth.php:83
2014-08-20 17:20:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH/classes/Controller/Twitter.php [ 21 ] in /srv/www/kohana.loc/application/classes/Controller/Twitter.php:21
2014-08-20 17:20:26 --- DEBUG: #0 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/srv/www/kohana...', 21, Array)
#1 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/kohana.loc/application/classes/Controller/Twitter.php:21
2014-08-20 17:22:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_verifier ~ APPPATH/classes/Controller/Twitter.php [ 23 ] in /srv/www/kohana.loc/application/classes/Controller/Twitter.php:23
2014-08-20 17:22:57 --- DEBUG: #0 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(23): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 23, Array)
#1 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/kohana.loc/application/classes/Controller/Twitter.php:23
2014-08-20 17:23:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: oauth_verifier ~ APPPATH/classes/Controller/Twitter.php [ 26 ] in /srv/www/kohana.loc/application/classes/Controller/Twitter.php:26
2014-08-20 17:23:06 --- DEBUG: #0 /srv/www/kohana.loc/application/classes/Controller/Twitter.php(26): Kohana_Core::error_handler(8, 'Undefined index...', '/srv/www/kohana...', 26, Array)
#1 /srv/www/kohana.loc/system/classes/Kohana/Controller.php(84): Controller_Twitter->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /srv/www/kohana.loc/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Twitter))
#4 /srv/www/kohana.loc/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /srv/www/kohana.loc/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /srv/www/kohana.loc/index.php(118): Kohana_Request->execute()
#7 {main} in /srv/www/kohana.loc/application/classes/Controller/Twitter.php:26