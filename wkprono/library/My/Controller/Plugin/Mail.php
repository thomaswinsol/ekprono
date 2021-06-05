<?php
/**
* Setup view variables
*/
class My_Controller_Plugin_Mail extends Zend_Controller_Plugin_Abstract
{
	
     const TEMPLATE_EKPRONO = 'EKPRONO';
    
     public $view;
    
     public function __construct()
     {
        /*ini_set("SMTP", "smtp.gmail.com");
	ini_set("sendmail_from", "winprocal1@gmail.com");
	ini_set("smtp_port", "465");*/
     	$viewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper('viewRenderer');
     	$viewRenderer->init();
     	$this->view = $viewRenderer->view;
     }     
     
     
     private function hasMailAccess(){
     	if (APPLICATION_ENV == 'production'){
     		return TRUE;
     	}
     	return false;
     }
     
     
     public function send($templateName,$data = null){ 
     	/*if (!$this->hasMailAccess()){
     		return FALSE; 
     	}*/
     	
     	$templateMethod = 'template_'.$templateName;
     	if (!method_exists($this,$templateMethod)){
     		throw new Exception('Mail template not found');
     	}
     	 
     	return $this->$templateMethod($data);
     	// mail('thomas.vanhuysse@telenet.be','testing','het werkt');
     	// echo 'mail model é: ';    
     }
     
     
     // ---------
     // TEMPLATES
     // ---------     
     protected function template_EKPRONO($data){
     
                         ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    /*$from = "thomas_vanhuysse@hotmail.com";
    $to = "thomas.vanhuysse@telenet.be";
    $subject = "PHP Mail Test script";
    $message = "This is a test to check the PHP Mail functionality";
    $headers = "From:" . $from;
    ob_clean();       
    mail($to,$subject,$message, $headers);

    echo "Test email sent";
    DIE("xxxxx");*/
                /*ini_set("SMTP", "smtp.gmail.com");
                ini_set("SMTP","tls://smtp.gmail.com");
		ini_set("sendmail_from", "thomasvanhuysse0@gmail.com");
		ini_set("smtp_port", "587");
                ini_set("auth_username","thomasvanhuysse0@gmail.com");
                ini_set("auth_password","alinealine2");
                date_default_timezone_set('Europe/Brussels');*/
                
                /*ini_set("SMTP", "smtp.live.com");
                ini_set("SMTP","tls://smtp.live.com");
		ini_set("sendmail_from", "thomas_vanhuysse@hotmail.com");
		ini_set("smtp_port", "587");
                ini_set("auth_username","thomas_vanhuysse@hotmail.com");
                ini_set("auth_password","alinealine1");
                date_default_timezone_set('Europe/Brussels');*/
                
                
                 
                
                $config = array(
            'host' => 'smtp.gmail.com',
            'port' => 465,
            'ssl' => 'ssl',
            'auth' => 'login',
            'username' => 'thomasvanhuysse0@gmail.com',
            'password' => 'alinealine2',
        );
        
         /*$config = array(
            'host' => 'smtp.live.com',
            'port' => 465,
            'ssl' => 'ssl',
            'auth' => 'login',
            'username' => 'thomas_vanhuysse@hotmail.com',
            'password' => 'alinealine1',
        );*/

                $transport = new Zend_Mail_Transport_Smtp('smtp.live.com', $config);
    
     		//$mail = new Zend_Mail('ISO-8859-1');
     		$mail = new Zend_Mail('UTF-8');
     		$mail->setFrom('thomas_vanhuysse@hotmail.com', 'WKPronostiek');

     		$mail->addTo($data[0]['email'], $data[0]['email'] );
     		$mail->addBcc('thomas.vanhuysse@telenet.be', 'thomas.vanhuysse@telenet.be' );
     		$mail->setHeaderEncoding(Zend_Mime::ENCODING_BASE64);
     		$this->view->data = $data;     	
     		$html = $this->view->render('/mail/wkprono.phtml');
     		//$mail->setBodyHtml($html,'ISO-8859-1',Zend_Mime::ENCODING_BASE64);
     		$mail->setBodyHtml($html,'UTF-8',Zend_Mime::ENCODING_BASE64);
     		$mail->setSubject("Uw EK Pronostiek :".$data[0]['naam']);
     		$mail->send($transport); 
                //$mail->send();
     		
     		return TRUE;
     }     
     
	 
} 
