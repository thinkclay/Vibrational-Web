<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-05-30 01:42:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_LOGICAL_AND, expecting ',' or ')' ~ APPPATH/classes/controller/public/site.php [ 62 ]
2012-05-30 01:42:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_LOGICAL_AND, expecting ',' or ')' ~ APPPATH/classes/controller/public/site.php [ 62 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-30 01:42:39 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/public/site.php [ 443 ]
2012-05-30 01:42:39 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/controller/public/site.php [ 443 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-30 01:42:58 --- ERROR: ErrorException [ 1 ]: Class 'ORM' not found ~ MODPATH/annex/submodules/auth/a1/classes/a1/driver/orm.php [ 13 ]
2012-05-30 01:42:58 --- STRACE: ErrorException [ 1 ]: Class 'ORM' not found ~ MODPATH/annex/submodules/auth/a1/classes/a1/driver/orm.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-30 11:46:24 --- ERROR: ErrorException [ 1 ]: Class 'Kohana_Facebook' not found ~ APPPATH/classes/controller/public/site.php [ 103 ]
2012-05-30 11:46:24 --- STRACE: ErrorException [ 1 ]: Class 'Kohana_Facebook' not found ~ APPPATH/classes/controller/public/site.php [ 103 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-30 11:46:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL annex/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
2012-05-30 11:46:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL annex/login was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 113 ]
--
#0 /var/www/arrae/staging/vibrational/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /var/www/arrae/staging/vibrational/system/classes/kohana/request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 /var/www/arrae/staging/vibrational/index.php(103): Kohana_Request->execute()
#3 {main}
2012-05-30 13:23:32 --- ERROR: ErrorException [ 1 ]: Class 'Mango' not found ~ MODPATH/annex/submodules/auth/a1/classes/a1/driver/mango.php [ 13 ]
2012-05-30 13:23:32 --- STRACE: ErrorException [ 1 ]: Class 'Mango' not found ~ MODPATH/annex/submodules/auth/a1/classes/a1/driver/mango.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-30 13:23:38 --- ERROR: ErrorException [ 1 ]: Class 'Mango' not found ~ MODPATH/annex/submodules/auth/a1/classes/a1/driver/mango.php [ 13 ]
2012-05-30 13:23:38 --- STRACE: ErrorException [ 1 ]: Class 'Mango' not found ~ MODPATH/annex/submodules/auth/a1/classes/a1/driver/mango.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-05-30 13:23:45 --- ERROR: ErrorException [ 1 ]: Class 'Kohana_Facebook' not found ~ APPPATH/classes/controller/public/site.php [ 103 ]
2012-05-30 13:23:45 --- STRACE: ErrorException [ 1 ]: Class 'Kohana_Facebook' not found ~ APPPATH/classes/controller/public/site.php [ 103 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}