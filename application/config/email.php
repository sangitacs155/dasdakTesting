<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Profiler Sections
| -------------------------------------------------------------------------
| This file lets you determine whether or not various sections of Email
| data are displayed when the Profiler is enabled.
| Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/email.html
|
*/

/*
|--------------------------------------------------------------------------
| SMTP configuration
|--------------------------------------------------------------------------
| In this example, i'm using a default Zoho Mail configuration
*/
$config['protocol'] = 'smtp';
$config['smtp_host'] = "ssl://smtp.googlemail.com";
$config['smtp_port'] = 465;
$config['smtp_user'] = "sang.kri.cs155@gmail.com";
$config['smtp_pass'] = 'Sangita@123';
$config['crlf'] =  "\r\n";
$config['newline'] = "\r\n";
$config['charset'] = "iso-8859-1";
$config['mailtype']         = "html";  