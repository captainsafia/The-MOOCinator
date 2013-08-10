<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-08 11:03:19 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Cookie.php:67
2013-08-08 11:03:19 --- DEBUG: #0 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('SQLiteManager_c...', NULL)
#1 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('SQLiteManager_c...')
#2 /Applications/MAMP/htdocs/MOOCinator/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Cookie.php:67
2013-08-08 12:05:23 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Cookie.php:67
2013-08-08 12:05:23 --- DEBUG: #0 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('SQLiteManager_c...', NULL)
#1 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('SQLiteManager_c...')
#2 /Applications/MAMP/htdocs/MOOCinator/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Cookie.php:67
2013-08-08 12:18:43 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Cookie.php:67
2013-08-08 12:18:43 --- DEBUG: #0 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('SQLiteManager_c...', NULL)
#1 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('SQLiteManager_c...')
#2 /Applications/MAMP/htdocs/MOOCinator/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Cookie.php:67
2013-08-08 12:27:04 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Cookie.php:67
2013-08-08 12:27:04 --- DEBUG: #0 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('SQLiteManager_c...', NULL)
#1 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('SQLiteManager_c...')
#2 /Applications/MAMP/htdocs/MOOCinator/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Cookie.php:67
2013-08-08 16:10:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Controller_Website' not found ~ APPPATH/classes/Controller/Index.php [ 3 ] in :
2013-08-08 16:10:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 16:11:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH/classes/Controller/Website.php [ 3 ] in :
2013-08-08 16:11:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 16:11:53 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/View.php:137
2013-08-08 16:11:53 --- DEBUG: #0 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /Applications/MAMP/htdocs/MOOCinator/application/classes/Controller/Website.php(9): Kohana_Controller_Template->before()
#4 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Controller.php(69): Controller_Website->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/MAMP/htdocs/MOOCinator/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/View.php:137
2013-08-08 16:12:40 --- EMERGENCY: View_Exception [ 0 ]: The requested view views/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/View.php:137
2013-08-08 16:12:40 --- DEBUG: #0 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/View.php(137): Kohana_View->set_filename('views/index')
#1 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/View.php(30): Kohana_View->__construct('views/index', NULL)
#2 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('views/index')
#3 /Applications/MAMP/htdocs/MOOCinator/application/classes/Controller/Website.php(9): Kohana_Controller_Template->before()
#4 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Controller.php(69): Controller_Website->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /Applications/MAMP/htdocs/MOOCinator/index.php(118): Kohana_Request->execute()
#10 {main} in /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/View.php:137
2013-08-08 16:28:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting variable (T_VARIABLE) or ${ (T_DOLLAR_OPEN_CURLY_BRACES) or {$ (T_CURLY_OPEN) ~ APPPATH/classes/Controller/Website.php [ 19 ] in :
2013-08-08 16:28:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-08 16:33:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: stylesheets ~ APPPATH/views/index.php [ 5 ] in /Applications/MAMP/htdocs/MOOCinator/application/views/index.php:5
2013-08-08 16:33:43 --- DEBUG: #0 /Applications/MAMP/htdocs/MOOCinator/application/views/index.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 5, Array)
#1 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/MOOCinator/application/classes/Controller/Index.php(7): Kohana_Response->body(Object(View))
#6 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Controller.php(84): Controller_Index->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#9 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /Applications/MAMP/htdocs/MOOCinator/index.php(118): Kohana_Request->execute()
#12 {main} in /Applications/MAMP/htdocs/MOOCinator/application/views/index.php:5
2013-08-08 16:35:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: stylesheets ~ APPPATH/views/index.php [ 5 ] in /Applications/MAMP/htdocs/MOOCinator/application/views/index.php:5
2013-08-08 16:35:02 --- DEBUG: #0 /Applications/MAMP/htdocs/MOOCinator/application/views/index.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 5, Array)
#1 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/MOOCinator/application/classes/Controller/Index.php(7): Kohana_Response->body(Object(View))
#6 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Controller.php(84): Controller_Index->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#9 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /Applications/MAMP/htdocs/MOOCinator/index.php(118): Kohana_Request->execute()
#12 {main} in /Applications/MAMP/htdocs/MOOCinator/application/views/index.php:5
2013-08-08 20:45:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: stylesheets ~ APPPATH/views/index.php [ 5 ] in /Applications/MAMP/htdocs/MOOCinator/application/views/index.php:5
2013-08-08 20:45:26 --- DEBUG: #0 /Applications/MAMP/htdocs/MOOCinator/application/views/index.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/Applications/M...', 5, Array)
#1 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/MOOCinator/application/classes/Controller/Index.php(7): Kohana_Response->body(Object(View))
#6 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Controller.php(84): Controller_Index->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#9 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Applications/MAMP/htdocs/MOOCinator/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 /Applications/MAMP/htdocs/MOOCinator/index.php(118): Kohana_Request->execute()
#12 {main} in /Applications/MAMP/htdocs/MOOCinator/application/views/index.php:5
2013-08-08 21:02:51 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method HTML::stylesheet() ~ APPPATH/views/index.php [ 5 ] in :
2013-08-08 21:02:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :