<?php
// require Slim
require 'vendor/autoload.php';
// Set time zone
date_default_timezone_set('America/Los_Angeles');

//slim-views is required for Twig
//see https://github.com/slimphp/Slim-Views
//must install via composer
$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig()
));

$view = $app->view();
$view->parserOptions = array(
    'debug' => true
);

//the code below enables us to use the helpers below
//urlFor siteUrl baseUrl currentUrl
//documentation at https://github.com/slimphp/Slim-Views
$view->parserExtensions = array(
    new \Slim\Views\TwigExtension(),
);

$app->get('/', function() use($app) {
	$app->render("about.twig");
})->name('home');

$app->get('/contact', function() use($app) {
	$app->render("contact.twig");
})->name('contact');

$app->post('/contact', function() use($app){
	$name = $app->request->post('name');
	$email = $app->request->post('email');
	$msg = $app->request->post('msg');
	
	if(!empty($name) && !empty($email) && !empty($msg)) {
		$cleanName = filter_var($name, FILTER_SANITIZE_STRING);
		$cleanEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
		$cleanMsg = filter_var($msg, FILTER_SANITIZE_STRING);
	} else {
		//message the user there was a problem
		$app->redirect('/contact');
	}


	$transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');
	$mailer = \Swift_Mailer::newInstance($transport);

	$message = \Swift_Message::newInstance();
	$message->setSubject('Email from Our Website');
	$message->setFrom(array(
		$cleanEmail => $cleanName
	));

	$message->setTo(array('teds@biblewordstudy.net'));
	$message->setBody($cleanMsg);



	$result = $mailer->send($message);

	if($result>0) {
		// send a message that says thank you
		$app->redirect('/');
	} else {
		// send a message to the user that teh message failed to send
		// log that there was an error
		$app->redirect('/contact');
	}
});

$app->run();

