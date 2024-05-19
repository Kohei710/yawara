<?php

/*--------------------------------------------------------------------------
	
	Script Name : Responsive Mailform
	Author : FIRSTSTEP - Motohiro Tani
	Author URL : https://www.1-firststep.com
	Create Date : 2014/03/25
	Version : 5.4
	Last Update : 2017/08/26
	
--------------------------------------------------------------------------*/


error_reporting( E_ALL );




mb_language( 'ja' );
mb_internal_encoding( 'UTF-8' );




require_once( 'class.mailform.php' );
$responsive_mailform = new Mailform();




if ( file_exists( dirname( __FILE__ ) .'/../addon/confirm/confirm.php' ) ) {
	include( dirname( __FILE__ ) .'/../addon/confirm/confirm.php' );
}




$responsive_mailform->javascript_action_check();
$responsive_mailform->referer_check();
$responsive_mailform->post_check();
$responsive_mailform->mail_set( 'send' );
$responsive_mailform->mail_set( 'thanks' );
$responsive_mailform->mail_send();
$responsive_mailform->mail_result();




?>