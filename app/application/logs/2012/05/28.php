<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-28 22:10:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vibrational/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-28 22:10:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: vibrational/index.php ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/arrae/staging/vibrational/index.php(109): Kohana_Request->execute()
#1 {main}
2012-05-28 21:13:53 --- ERROR: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'filedrop' at 'MODPATH/filedrop' ~ SYSPATH/classes/kohana/core.php [ 542 ]
2012-05-28 21:13:53 --- STRACE: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'filedrop' at 'MODPATH/filedrop' ~ SYSPATH/classes/kohana/core.php [ 542 ]
--
#0 /var/www/arrae/staging/vibrational/modules/annex/classes/annex/core.php(44): Kohana_Core::modules(Array)
#1 /var/www/arrae/staging/vibrational/modules/annex/classes/annex/core.php(136): Annex_Core->__construct(Array, Array)
#2 /var/www/arrae/staging/vibrational/modules/annex/init.php(43): Annex_Core::factory(Array, Array)
#3 /var/www/arrae/staging/vibrational/system/classes/kohana/core.php(565): require_once('/var/www/arrae/...')
#4 /var/www/arrae/staging/vibrational/application/bootstrap.php(109): Kohana_Core::modules(Array)
#5 /var/www/arrae/staging/vibrational/index.php(96): require('/var/www/arrae/...')
#6 {main}
2012-05-28 21:15:06 --- ERROR: ErrorException [ 8 ]: Undefined index:  resources ~ MODPATH/annex/classes/annex/core.php [ 113 ]
2012-05-28 21:15:06 --- STRACE: ErrorException [ 8 ]: Undefined index:  resources ~ MODPATH/annex/classes/annex/core.php [ 113 ]
--
#0 /var/www/arrae/staging/vibrational/modules/annex/classes/annex/core.php(113): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/arrae/...', 113, Array)
#1 /var/www/arrae/staging/vibrational/modules/annex/classes/annex/core.php(75): Annex_Core->_instantiate_module('annex')
#2 /var/www/arrae/staging/vibrational/modules/annex/classes/annex/core.php(47): Annex_Core->_validate_modules(Array)
#3 /var/www/arrae/staging/vibrational/modules/annex/classes/annex/core.php(136): Annex_Core->__construct(Array, Array)
#4 /var/www/arrae/staging/vibrational/modules/annex/init.php(42): Annex_Core::factory(Array, Array)
#5 /var/www/arrae/staging/vibrational/system/classes/kohana/core.php(565): require_once('/var/www/arrae/...')
#6 /var/www/arrae/staging/vibrational/application/bootstrap.php(109): Kohana_Core::modules(Array)
#7 /var/www/arrae/staging/vibrational/index.php(96): require('/var/www/arrae/...')
#8 {main}
2012-05-28 21:22:09 --- ERROR: ErrorException [ 8 ]: Undefined index:  resources ~ MODPATH/annex/classes/annex/core.php [ 113 ]
2012-05-28 21:22:09 --- STRACE: ErrorException [ 8 ]: Undefined index:  resources ~ MODPATH/annex/classes/annex/core.php [ 113 ]
--
#0 /var/www/arrae/staging/vibrational/modules/annex/classes/annex/core.php(113): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/arrae/...', 113, Array)
#1 /var/www/arrae/staging/vibrational/modules/annex/classes/annex/core.php(75): Annex_Core->_instantiate_module('annex')
#2 /var/www/arrae/staging/vibrational/modules/annex/classes/annex/core.php(47): Annex_Core->_validate_modules(Array)
#3 /var/www/arrae/staging/vibrational/modules/annex/classes/annex/core.php(136): Annex_Core->__construct(Array, Array)
#4 /var/www/arrae/staging/vibrational/modules/annex/init.php(42): Annex_Core::factory(Array, Array)
#5 /var/www/arrae/staging/vibrational/system/classes/kohana/core.php(565): require_once('/var/www/arrae/...')
#6 /var/www/arrae/staging/vibrational/application/bootstrap.php(109): Kohana_Core::modules(Array)
#7 /var/www/arrae/staging/vibrational/index.php(96): require('/var/www/arrae/...')
#8 {main}
2012-05-28 21:22:54 --- ERROR: View_Exception [ 0 ]: The requested view private/default could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-28 21:22:54 --- STRACE: View_Exception [ 0 ]: The requested view private/default could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/arrae/staging/vibrational/system/classes/kohana/view.php(137): Kohana_View->set_filename('private/default')
#1 /var/www/arrae/staging/vibrational/system/classes/kohana/view.php(30): Kohana_View->__construct('private/default', NULL)
#2 /var/www/arrae/staging/vibrational/system/classes/kohana/controller/template.php(33): Kohana_View::factory('private/default')
#3 /var/www/arrae/staging/vibrational/modules/annex/classes/controller/private.php(18): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Private->before()
#5 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Private_Annex))
#6 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/arrae/staging/vibrational/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-28 21:23:57 --- ERROR: ErrorException [ 1 ]: Class 'A2' not found ~ MODPATH/annex/classes/controller/private.php [ 20 ]
2012-05-28 21:23:57 --- STRACE: ErrorException [ 1 ]: Class 'A2' not found ~ MODPATH/annex/classes/controller/private.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-28 21:24:39 --- ERROR: ErrorException [ 1 ]: Class 'Event' not found ~ MODPATH/annex/classes/controller/private.php [ 22 ]
2012-05-28 21:24:39 --- STRACE: ErrorException [ 1 ]: Class 'Event' not found ~ MODPATH/annex/classes/controller/private.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-28 21:28:17 --- ERROR: ErrorException [ 1 ]: Class 'Controller_Public' not found ~ APPPATH/classes/controller/public.php [ 4 ]
2012-05-28 21:28:17 --- STRACE: ErrorException [ 1 ]: Class 'Controller_Public' not found ~ APPPATH/classes/controller/public.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-28 21:29:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-28 21:29:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI:  ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-28 21:30:59 --- ERROR: View_Exception [ 0 ]: The requested view blocks/navigation/public/header could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-28 21:30:59 --- STRACE: View_Exception [ 0 ]: The requested view blocks/navigation/public/header could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/arrae/staging/vibrational/system/classes/kohana/view.php(137): Kohana_View->set_filename('blocks/navigati...')
#1 /var/www/arrae/staging/vibrational/system/classes/kohana/view.php(30): Kohana_View->__construct('blocks/navigati...', NULL)
#2 /var/www/arrae/staging/vibrational/modules/annex/classes/controller/public.php(66): Kohana_View::factory('blocks/navigati...')
#3 [internal function]: Controller_Public->before()
#4 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client/internal.php(103): ReflectionMethod->invoke(Object(Controller_Public_Site))
#5 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/arrae/staging/vibrational/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#8 {main}
2012-05-28 21:32:53 --- ERROR: View_Exception [ 0 ]: The requested view public/site/home could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
2012-05-28 21:32:53 --- STRACE: View_Exception [ 0 ]: The requested view public/site/home could not be found ~ SYSPATH/classes/kohana/view.php [ 252 ]
--
#0 /var/www/arrae/staging/vibrational/system/classes/kohana/view.php(137): Kohana_View->set_filename('public/site/hom...')
#1 /var/www/arrae/staging/vibrational/system/classes/kohana/view.php(30): Kohana_View->__construct('public/site/hom...', NULL)
#2 /var/www/arrae/staging/vibrational/application/classes/controller/public/site.php(12): Kohana_View::factory('public/site/hom...')
#3 [internal function]: Controller_Public_Site->action_index()
#4 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Site))
#5 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /var/www/arrae/staging/vibrational/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#8 {main}
2012-05-28 21:34:31 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: main ~ SYSPATH/classes/kohana/view.php [ 171 ]
2012-05-28 21:34:31 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: main ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /var/www/arrae/staging/vibrational/application/classes/controller/public/site.php(13): Kohana_View->__get('main')
#1 [internal function]: Controller_Public_Site->action_index()
#2 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Site))
#3 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/arrae/staging/vibrational/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#6 {main}
2012-05-28 21:36:34 --- ERROR: ErrorException [ 1 ]: Class 'Theme' not found ~ MODPATH/annex/classes/controller/public.php [ 66 ]
2012-05-28 21:36:34 --- STRACE: ErrorException [ 1 ]: Class 'Theme' not found ~ MODPATH/annex/classes/controller/public.php [ 66 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-28 21:40:08 --- ERROR: ErrorException [ 1 ]: Class 'A2' not found ~ MODPATH/annex/classes/controller/public.php [ 20 ]
2012-05-28 21:40:08 --- STRACE: ErrorException [ 1 ]: Class 'A2' not found ~ MODPATH/annex/classes/controller/public.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-28 21:40:25 --- ERROR: ErrorException [ 1 ]: Class 'A2' not found ~ MODPATH/annex/classes/controller/public.php [ 20 ]
2012-05-28 21:40:25 --- STRACE: ErrorException [ 1 ]: Class 'A2' not found ~ MODPATH/annex/classes/controller/public.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-28 21:41:58 --- ERROR: ErrorException [ 1 ]: Class 'A2' not found ~ MODPATH/annex/classes/controller/public.php [ 20 ]
2012-05-28 21:41:58 --- STRACE: ErrorException [ 1 ]: Class 'A2' not found ~ MODPATH/annex/classes/controller/public.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-28 21:42:39 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: scripts ~ SYSPATH/classes/kohana/view.php [ 171 ]
2012-05-28 21:42:39 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: scripts ~ SYSPATH/classes/kohana/view.php [ 171 ]
--
#0 /var/www/arrae/staging/vibrational/application/classes/controller/public/site.php(7): Kohana_View->__get('scripts')
#1 [internal function]: Controller_Public_Site->action_index()
#2 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Site))
#3 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /var/www/arrae/staging/vibrational/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#6 {main}
2012-05-28 21:54:27 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/annex/themes/default/views/wrapper.php [ 23 ]
2012-05-28 21:54:27 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH/annex/themes/default/views/wrapper.php [ 23 ]
--
#0 /var/www/arrae/staging/vibrational/modules/annex/themes/default/views/wrapper.php(23): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/arrae/...', 23, Array)
#1 /var/www/arrae/staging/vibrational/system/classes/kohana/view.php(61): include('/var/www/arrae/...')
#2 /var/www/arrae/staging/vibrational/system/classes/kohana/view.php(343): Kohana_View::capture('/var/www/arrae/...', Array)
#3 /var/www/arrae/staging/vibrational/system/classes/kohana/controller/template.php(44): Kohana_View->render()
#4 /var/www/arrae/staging/vibrational/modules/annex/classes/controller/public.php(34): Kohana_Controller_Template->after()
#5 [internal function]: Controller_Public->after()
#6 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client/internal.php(121): ReflectionMethod->invoke(Object(Controller_Public_Site))
#7 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/arrae/staging/vibrational/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#10 {main}
2012-05-28 21:58:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: annex/styles/global.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-28 21:58:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: annex/styles/global.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-28 21:59:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: annex/styles/global.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-28 21:59:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: annex/styles/global.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-28 21:59:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: annex/styles/global.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-28 21:59:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: annex/styles/global.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-28 22:01:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL annex/annex/styles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-28 22:01:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL annex/annex/styles was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/arrae/staging/vibrational/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-28 22:01:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: annex/styles/annex/global.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-28 22:01:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: annex/styles/annex/global.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-28 22:01:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: annex/styles/annex/global.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-28 22:01:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: annex/styles/annex/global.css ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-28 22:02:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: annex/styles/annex/global.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-28 22:02:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: annex/styles/annex/global.less ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-28 22:02:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: annex/styles/annex/global ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-28 22:02:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: annex/styles/annex/global ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-28 22:03:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: annex/styles/annex/tesh ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-28 22:03:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: annex/styles/annex/tesh ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-28 22:03:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: annex/styles/annex/tesh ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-28 22:03:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: annex/styles/annex/tesh ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-28 22:04:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: annex/styles/annex/tesh ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-28 22:04:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: annex/styles/annex/tesh ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-28 22:04:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: annex/styles/annex/tesh ~ SYSPATH/classes/kohana/request.php [ 1126 ]
2012-05-28 22:04:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: annex/styles/annex/tesh ~ SYSPATH/classes/kohana/request.php [ 1126 ]
--
#0 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#1 {main}
2012-05-28 22:06:43 --- ERROR: ErrorException [ 2 ]: touch(): Unable to create file global.less-1338263772.css because Permission denied ~ MODPATH/annex/submodules/less/classes/less/core.php [ 112 ]
2012-05-28 22:06:43 --- STRACE: ErrorException [ 2 ]: touch(): Unable to create file global.less-1338263772.css because Permission denied ~ MODPATH/annex/submodules/less/classes/less/core.php [ 112 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'touch(): Unable...', '/var/www/arrae/...', 112, Array)
#1 /var/www/arrae/staging/vibrational/modules/annex/submodules/less/classes/less/core.php(112): touch('global.less-133...', 1338260172)
#2 /var/www/arrae/staging/vibrational/modules/annex/submodules/less/classes/less/core.php(64): Less_Core::_get_filename('/var/www/arrae/...', '')
#3 /var/www/arrae/staging/vibrational/modules/annex/classes/controller/public/annex.php(40): Less_Core::compile('/var/www/arrae/...')
#4 [internal function]: Controller_Public_Annex->action_styles()
#5 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Annex))
#6 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/arrae/staging/vibrational/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-28 22:06:46 --- ERROR: ErrorException [ 2 ]: touch(): Unable to create file global.less-1338263772.css because Permission denied ~ MODPATH/annex/submodules/less/classes/less/core.php [ 112 ]
2012-05-28 22:06:46 --- STRACE: ErrorException [ 2 ]: touch(): Unable to create file global.less-1338263772.css because Permission denied ~ MODPATH/annex/submodules/less/classes/less/core.php [ 112 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'touch(): Unable...', '/var/www/arrae/...', 112, Array)
#1 /var/www/arrae/staging/vibrational/modules/annex/submodules/less/classes/less/core.php(112): touch('global.less-133...', 1338260172)
#2 /var/www/arrae/staging/vibrational/modules/annex/submodules/less/classes/less/core.php(64): Less_Core::_get_filename('/var/www/arrae/...', '')
#3 /var/www/arrae/staging/vibrational/modules/annex/classes/controller/public/annex.php(40): Less_Core::compile('/var/www/arrae/...')
#4 [internal function]: Controller_Public_Annex->action_styles()
#5 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Annex))
#6 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/arrae/staging/vibrational/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-28 22:09:10 --- ERROR: ErrorException [ 2 ]: touch(): Unable to create file global.less-1338263772.css because Permission denied ~ MODPATH/annex/submodules/less/classes/less/core.php [ 112 ]
2012-05-28 22:09:10 --- STRACE: ErrorException [ 2 ]: touch(): Unable to create file global.less-1338263772.css because Permission denied ~ MODPATH/annex/submodules/less/classes/less/core.php [ 112 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'touch(): Unable...', '/var/www/arrae/...', 112, Array)
#1 /var/www/arrae/staging/vibrational/modules/annex/submodules/less/classes/less/core.php(112): touch('global.less-133...', 1338260172)
#2 /var/www/arrae/staging/vibrational/modules/annex/submodules/less/classes/less/core.php(64): Less_Core::_get_filename('/var/www/arrae/...', '')
#3 /var/www/arrae/staging/vibrational/modules/annex/classes/controller/public/annex.php(43): Less_Core::compile('/var/www/arrae/...')
#4 [internal function]: Controller_Public_Annex->action_styles()
#5 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Annex))
#6 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/arrae/staging/vibrational/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-28 22:09:17 --- ERROR: ErrorException [ 2 ]: touch(): Unable to create file global.less-1338263772.css because Permission denied ~ MODPATH/annex/submodules/less/classes/less/core.php [ 112 ]
2012-05-28 22:09:17 --- STRACE: ErrorException [ 2 ]: touch(): Unable to create file global.less-1338263772.css because Permission denied ~ MODPATH/annex/submodules/less/classes/less/core.php [ 112 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'touch(): Unable...', '/var/www/arrae/...', 112, Array)
#1 /var/www/arrae/staging/vibrational/modules/annex/submodules/less/classes/less/core.php(112): touch('global.less-133...', 1338260172)
#2 /var/www/arrae/staging/vibrational/modules/annex/submodules/less/classes/less/core.php(64): Less_Core::_get_filename('/var/www/arrae/...', '')
#3 /var/www/arrae/staging/vibrational/modules/annex/classes/controller/public/annex.php(43): Less_Core::compile('/var/www/arrae/...')
#4 [internal function]: Controller_Public_Annex->action_styles()
#5 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Annex))
#6 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/arrae/staging/vibrational/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-28 22:09:32 --- ERROR: ErrorException [ 2 ]: touch(): Unable to create file test.less-1338263772.css because Permission denied ~ MODPATH/annex/submodules/less/classes/less/core.php [ 112 ]
2012-05-28 22:09:32 --- STRACE: ErrorException [ 2 ]: touch(): Unable to create file test.less-1338263772.css because Permission denied ~ MODPATH/annex/submodules/less/classes/less/core.php [ 112 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'touch(): Unable...', '/var/www/arrae/...', 112, Array)
#1 /var/www/arrae/staging/vibrational/modules/annex/submodules/less/classes/less/core.php(112): touch('test.less-13382...', 1338260172)
#2 /var/www/arrae/staging/vibrational/modules/annex/submodules/less/classes/less/core.php(64): Less_Core::_get_filename('/var/www/arrae/...', '')
#3 /var/www/arrae/staging/vibrational/modules/annex/classes/controller/public/annex.php(43): Less_Core::compile('/var/www/arrae/...')
#4 [internal function]: Controller_Public_Annex->action_styles()
#5 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Annex))
#6 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/arrae/staging/vibrational/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-28 22:15:25 --- ERROR: ErrorException [ 2 ]: touch(): Unable to create file global.less-1338262786.css because Permission denied ~ MODPATH/annex/submodules/less/classes/less/core.php [ 112 ]
2012-05-28 22:15:25 --- STRACE: ErrorException [ 2 ]: touch(): Unable to create file global.less-1338262786.css because Permission denied ~ MODPATH/annex/submodules/less/classes/less/core.php [ 112 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'touch(): Unable...', '/var/www/arrae/...', 112, Array)
#1 /var/www/arrae/staging/vibrational/modules/annex/submodules/less/classes/less/core.php(112): touch('global.less-133...', 1338259186)
#2 /var/www/arrae/staging/vibrational/modules/annex/submodules/less/classes/less/core.php(64): Less_Core::_get_filename('/var/www/arrae/...', '')
#3 /var/www/arrae/staging/vibrational/modules/annex/classes/controller/public/annex.php(43): Less_Core::compile('/var/www/arrae/...')
#4 [internal function]: Controller_Public_Annex->action_styles()
#5 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Annex))
#6 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/arrae/staging/vibrational/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-28 22:21:15 --- ERROR: ErrorException [ 2 ]: touch(): Unable to create file global.less-1338262786.css because Permission denied ~ MODPATH/annex/submodules/less/classes/less/core.php [ 112 ]
2012-05-28 22:21:15 --- STRACE: ErrorException [ 2 ]: touch(): Unable to create file global.less-1338262786.css because Permission denied ~ MODPATH/annex/submodules/less/classes/less/core.php [ 112 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'touch(): Unable...', '/var/www/arrae/...', 112, Array)
#1 /var/www/arrae/staging/vibrational/modules/annex/submodules/less/classes/less/core.php(112): touch('global.less-133...', 1338259186)
#2 /var/www/arrae/staging/vibrational/modules/annex/submodules/less/classes/less/core.php(64): Less_Core::_get_filename('/var/www/arrae/...', '')
#3 /var/www/arrae/staging/vibrational/modules/annex/classes/controller/public/annex.php(43): Less_Core::compile('/var/www/arrae/...')
#4 [internal function]: Controller_Public_Annex->action_styles()
#5 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Annex))
#6 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 /var/www/arrae/staging/vibrational/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#9 {main}
2012-05-28 22:22:09 --- ERROR: ErrorException [ 2 ]: touch(): Unable to create file 879b4920ab2c62a63a3482897de21d5a-1338262786.css because Permission denied ~ MODPATH/annex/submodules/less/classes/less/core.php [ 160 ]
2012-05-28 22:22:09 --- STRACE: ErrorException [ 2 ]: touch(): Unable to create file 879b4920ab2c62a63a3482897de21d5a-1338262786.css because Permission denied ~ MODPATH/annex/submodules/less/classes/less/core.php [ 160 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'touch(): Unable...', '/var/www/arrae/...', 160, Array)
#1 /var/www/arrae/staging/vibrational/modules/annex/submodules/less/classes/less/core.php(160): touch('879b4920ab2c62a...')
#2 /var/www/arrae/staging/vibrational/modules/annex/submodules/less/classes/less/core.php(143): Less_Core::_generate_assets('879b4920ab2c62a...', Array)
#3 /var/www/arrae/staging/vibrational/modules/annex/submodules/less/classes/less/core.php(59): Less_Core::_combine(Array)
#4 /var/www/arrae/staging/vibrational/modules/annex/classes/controller/public/annex.php(43): Less_Core::compile('/var/www/arrae/...')
#5 [internal function]: Controller_Public_Annex->action_styles()
#6 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Annex))
#7 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/arrae/staging/vibrational/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#10 {main}
2012-05-28 22:22:11 --- ERROR: ErrorException [ 2 ]: touch(): Unable to create file 879b4920ab2c62a63a3482897de21d5a-1338262786.css because Permission denied ~ MODPATH/annex/submodules/less/classes/less/core.php [ 160 ]
2012-05-28 22:22:11 --- STRACE: ErrorException [ 2 ]: touch(): Unable to create file 879b4920ab2c62a63a3482897de21d5a-1338262786.css because Permission denied ~ MODPATH/annex/submodules/less/classes/less/core.php [ 160 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'touch(): Unable...', '/var/www/arrae/...', 160, Array)
#1 /var/www/arrae/staging/vibrational/modules/annex/submodules/less/classes/less/core.php(160): touch('879b4920ab2c62a...')
#2 /var/www/arrae/staging/vibrational/modules/annex/submodules/less/classes/less/core.php(143): Less_Core::_generate_assets('879b4920ab2c62a...', Array)
#3 /var/www/arrae/staging/vibrational/modules/annex/submodules/less/classes/less/core.php(59): Less_Core::_combine(Array)
#4 /var/www/arrae/staging/vibrational/modules/annex/classes/controller/public/annex.php(43): Less_Core::compile('/var/www/arrae/...')
#5 [internal function]: Controller_Public_Annex->action_styles()
#6 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Annex))
#7 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/arrae/staging/vibrational/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#10 {main}
2012-05-28 22:22:24 --- ERROR: ErrorException [ 2 ]: touch(): Unable to create file 879b4920ab2c62a63a3482897de21d5a-1338262786.css because Permission denied ~ MODPATH/annex/submodules/less/classes/less/core.php [ 160 ]
2012-05-28 22:22:24 --- STRACE: ErrorException [ 2 ]: touch(): Unable to create file 879b4920ab2c62a63a3482897de21d5a-1338262786.css because Permission denied ~ MODPATH/annex/submodules/less/classes/less/core.php [ 160 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'touch(): Unable...', '/var/www/arrae/...', 160, Array)
#1 /var/www/arrae/staging/vibrational/modules/annex/submodules/less/classes/less/core.php(160): touch('879b4920ab2c62a...')
#2 /var/www/arrae/staging/vibrational/modules/annex/submodules/less/classes/less/core.php(143): Less_Core::_generate_assets('879b4920ab2c62a...', Array)
#3 /var/www/arrae/staging/vibrational/modules/annex/submodules/less/classes/less/core.php(59): Less_Core::_combine(Array)
#4 /var/www/arrae/staging/vibrational/modules/annex/classes/controller/public/annex.php(43): Less_Core::compile('/var/www/arrae/...')
#5 [internal function]: Controller_Public_Annex->action_styles()
#6 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Annex))
#7 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/arrae/staging/vibrational/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#10 {main}
2012-05-28 22:23:04 --- ERROR: ErrorException [ 2 ]: filemtime(): stat failed for  ~ MODPATH/annex/classes/controller/public/annex.php [ 47 ]
2012-05-28 22:23:04 --- STRACE: ErrorException [ 2 ]: filemtime(): stat failed for  ~ MODPATH/annex/classes/controller/public/annex.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filemtime(): st...', '/var/www/arrae/...', 47, Array)
#1 /var/www/arrae/staging/vibrational/modules/annex/classes/controller/public/annex.php(47): filemtime('<link type="tex...')
#2 [internal function]: Controller_Public_Annex->action_styles()
#3 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Annex))
#4 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/arrae/staging/vibrational/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#7 {main}
2012-05-28 22:24:44 --- ERROR: ErrorException [ 2 ]: filemtime(): stat failed for  ~ MODPATH/annex/classes/controller/public/annex.php [ 47 ]
2012-05-28 22:24:44 --- STRACE: ErrorException [ 2 ]: filemtime(): stat failed for  ~ MODPATH/annex/classes/controller/public/annex.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filemtime(): st...', '/var/www/arrae/...', 47, Array)
#1 /var/www/arrae/staging/vibrational/modules/annex/classes/controller/public/annex.php(47): filemtime('<link type="tex...')
#2 [internal function]: Controller_Public_Annex->action_styles()
#3 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Annex))
#4 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/arrae/staging/vibrational/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#7 {main}
2012-05-28 22:25:08 --- ERROR: ErrorException [ 2 ]: filemtime(): stat failed for  ~ MODPATH/annex/classes/controller/public/annex.php [ 49 ]
2012-05-28 22:25:08 --- STRACE: ErrorException [ 2 ]: filemtime(): stat failed for  ~ MODPATH/annex/classes/controller/public/annex.php [ 49 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filemtime(): st...', '/var/www/arrae/...', 49, Array)
#1 /var/www/arrae/staging/vibrational/modules/annex/classes/controller/public/annex.php(49): filemtime('<link type="tex...')
#2 [internal function]: Controller_Public_Annex->action_styles()
#3 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Annex))
#4 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/arrae/staging/vibrational/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#7 {main}
2012-05-28 22:25:10 --- ERROR: ErrorException [ 2 ]: filemtime(): stat failed for  ~ MODPATH/annex/classes/controller/public/annex.php [ 49 ]
2012-05-28 22:25:10 --- STRACE: ErrorException [ 2 ]: filemtime(): stat failed for  ~ MODPATH/annex/classes/controller/public/annex.php [ 49 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filemtime(): st...', '/var/www/arrae/...', 49, Array)
#1 /var/www/arrae/staging/vibrational/modules/annex/classes/controller/public/annex.php(49): filemtime('<link type="tex...')
#2 [internal function]: Controller_Public_Annex->action_styles()
#3 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Annex))
#4 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/arrae/staging/vibrational/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#7 {main}
2012-05-28 22:25:54 --- ERROR: ErrorException [ 2 ]: touch(): Unable to create file 879b4920ab2c62a63a3482897de21d5a-1338262786.css because Permission denied ~ MODPATH/annex/submodules/less/classes/less/core.php [ 160 ]
2012-05-28 22:25:54 --- STRACE: ErrorException [ 2 ]: touch(): Unable to create file 879b4920ab2c62a63a3482897de21d5a-1338262786.css because Permission denied ~ MODPATH/annex/submodules/less/classes/less/core.php [ 160 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'touch(): Unable...', '/var/www/arrae/...', 160, Array)
#1 /var/www/arrae/staging/vibrational/modules/annex/submodules/less/classes/less/core.php(160): touch('879b4920ab2c62a...')
#2 /var/www/arrae/staging/vibrational/modules/annex/submodules/less/classes/less/core.php(143): Less_Core::_generate_assets('879b4920ab2c62a...', Array)
#3 /var/www/arrae/staging/vibrational/modules/annex/submodules/less/classes/less/core.php(59): Less_Core::_combine(Array)
#4 /var/www/arrae/staging/vibrational/modules/annex/classes/controller/public/annex.php(43): Less_Core::compile('/var/www/arrae/...')
#5 [internal function]: Controller_Public_Annex->action_styles()
#6 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Annex))
#7 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/arrae/staging/vibrational/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#10 {main}
2012-05-28 22:26:15 --- ERROR: ErrorException [ 2 ]: touch(): Unable to create file 879b4920ab2c62a63a3482897de21d5a-1338262786.css because Permission denied ~ MODPATH/annex/submodules/less/classes/less/core.php [ 160 ]
2012-05-28 22:26:15 --- STRACE: ErrorException [ 2 ]: touch(): Unable to create file 879b4920ab2c62a63a3482897de21d5a-1338262786.css because Permission denied ~ MODPATH/annex/submodules/less/classes/less/core.php [ 160 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'touch(): Unable...', '/var/www/arrae/...', 160, Array)
#1 /var/www/arrae/staging/vibrational/modules/annex/submodules/less/classes/less/core.php(160): touch('879b4920ab2c62a...')
#2 /var/www/arrae/staging/vibrational/modules/annex/submodules/less/classes/less/core.php(143): Less_Core::_generate_assets('879b4920ab2c62a...', Array)
#3 /var/www/arrae/staging/vibrational/modules/annex/submodules/less/classes/less/core.php(59): Less_Core::_combine(Array)
#4 /var/www/arrae/staging/vibrational/modules/annex/classes/controller/public/annex.php(43): Less_Core::compile('/var/www/arrae/...')
#5 [internal function]: Controller_Public_Annex->action_styles()
#6 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Annex))
#7 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/arrae/staging/vibrational/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#10 {main}
2012-05-28 22:26:49 --- ERROR: ErrorException [ 2 ]: touch(): Unable to create file 879b4920ab2c62a63a3482897de21d5a-1338262786.css because Permission denied ~ MODPATH/annex/submodules/less/classes/less/core.php [ 160 ]
2012-05-28 22:26:49 --- STRACE: ErrorException [ 2 ]: touch(): Unable to create file 879b4920ab2c62a63a3482897de21d5a-1338262786.css because Permission denied ~ MODPATH/annex/submodules/less/classes/less/core.php [ 160 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'touch(): Unable...', '/var/www/arrae/...', 160, Array)
#1 /var/www/arrae/staging/vibrational/modules/annex/submodules/less/classes/less/core.php(160): touch('879b4920ab2c62a...')
#2 /var/www/arrae/staging/vibrational/modules/annex/submodules/less/classes/less/core.php(143): Less_Core::_generate_assets('879b4920ab2c62a...', Array)
#3 /var/www/arrae/staging/vibrational/modules/annex/submodules/less/classes/less/core.php(59): Less_Core::_combine(Array)
#4 /var/www/arrae/staging/vibrational/modules/annex/classes/controller/public/annex.php(43): Less_Core::compile('/var/www/arrae/...')
#5 [internal function]: Controller_Public_Annex->action_styles()
#6 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Annex))
#7 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 /var/www/arrae/staging/vibrational/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#10 {main}
2012-05-28 22:29:41 --- ERROR: ErrorException [ 2 ]: filemtime(): stat failed for  ~ MODPATH/annex/classes/controller/public/annex.php [ 47 ]
2012-05-28 22:29:41 --- STRACE: ErrorException [ 2 ]: filemtime(): stat failed for  ~ MODPATH/annex/classes/controller/public/annex.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filemtime(): st...', '/var/www/arrae/...', 47, Array)
#1 /var/www/arrae/staging/vibrational/modules/annex/classes/controller/public/annex.php(47): filemtime('<link type="tex...')
#2 [internal function]: Controller_Public_Annex->action_styles()
#3 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Annex))
#4 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/arrae/staging/vibrational/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#7 {main}
2012-05-28 22:29:43 --- ERROR: ErrorException [ 2 ]: filemtime(): stat failed for  ~ MODPATH/annex/classes/controller/public/annex.php [ 47 ]
2012-05-28 22:29:43 --- STRACE: ErrorException [ 2 ]: filemtime(): stat failed for  ~ MODPATH/annex/classes/controller/public/annex.php [ 47 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'filemtime(): st...', '/var/www/arrae/...', 47, Array)
#1 /var/www/arrae/staging/vibrational/modules/annex/classes/controller/public/annex.php(47): filemtime('<link type="tex...')
#2 [internal function]: Controller_Public_Annex->action_styles()
#3 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client/internal.php(118): ReflectionMethod->invoke(Object(Controller_Public_Annex))
#4 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /var/www/arrae/staging/vibrational/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#7 {main}
2012-05-28 22:45:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-28 22:45:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/arrae/staging/vibrational/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-28 22:48:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-28 22:48:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/arrae/staging/vibrational/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-28 22:48:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2012-05-28 22:48:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/arrae/staging/vibrational/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#3 {main}