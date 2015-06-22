<?php

require_once("../inc/config.php");
require(ROOT_PATH . 'vendor/autoload.php');
date_default_timezone_set('America/Los_Angeles');
/* This file contains instructions for three different states of the form:
 *   - Displaying the initial contact form
 *   - Handling the form submission and sending the email
 *   - Displaying a thank you message
 */

// a request method of post indicates that
// we are receiving a form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // the form has fields for name, email, and message
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    // the fields name, email, and message are required
    if ($name == "" OR $email == "" OR $message == "") {
        $error_message = "You must specify a value for name, email address, and message.";
    }


    // this code checks for malicious code attempting
    // to inject values into the email header
    if (!isset($error_message)) {
        foreach( $_POST as $value ){
            if( stripos($value,'Content-Type:') !== FALSE ){
                $error_message = "There was a problem with the information you entered.";
            }
        }
    }

    // the field named address is used as a spam honeypot
    // it is hidden from users, and it must be left blank
    if (!isset($error_message) && $_POST["address"] != "") {
        $error_message = "Your form submission has an error.";
    }

require_once(ROOT_PATH . 'vendor/phpmailer/phpmailer/class.phpmailer.php');
	
    $mail = new PHPMailer(); // The PHP mailer example has no () but the example from Treehouse had PHPMailer().  This may be an error source.
//	$mail->isSMTP();
	//Enable SMTP debugging
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages
//	$mail->SMTPDebug = 3;

	//Ask for HTML-friendly debug output
//	$mail->Debugoutput = 'html';

    if (!isset($error_message) && !$mail->ValidateAddress($email)){
        $error_message = "You must specify a valid email address.";
    }
	
	//Set the hostname of the mail server
//	$mail->Host = 'smtp.gmail.com';

	//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
//	$mail->Port = 587;

	//Set the encryption system to use - ssl (deprecated) or tls
//	$mail->SMTPSecure = 'ssl';

	//Whether to use SMTP authentication
//	$mail->SMTPAuth = true;

	//Username to use for SMTP authentication - use full email address for gmail
	$mail->Username = "westtvpack198@gmail.com";

	//Password to use for SMTP authentication
	$mail->Password = "Pack198Portland";

    // if, after all the checks above, there is no message, then we
    // have a valid form submission; let's send the email
    if (!isset($error_message)) {
        $email_body = "";
        $email_body = $email_body . "Name: " . $name . "<br>";
        $email_body = $email_body . "Email: " . $email . "<br>";
        $email_body = $email_body . "Message: " . $message;

        $mail->SetFrom($email, $name);
        $address = "teds@biblewordstudy.net";
        $mail->AddAddress($address, "Web Master");
		$mail->AddAddress('jim@sifferle.net', 'Pack 198 Leader');
        $mail->AddAddress('joy@sifferle.net', "Information");
        $mail->Subject    = "Cub Scout Pack 198 | " . $name;
		
        $mail->MsgHTML($email_body);
		$mail->altBody    = "To view the message, please use an HTML compatible email viewer.";

        // if the email is sent successfully, redirect to a thank you page;
        // otherwise, set a new error message
        if($mail->Send()) {
            header("Location: " . BASE_URL . "contact/?status=thanks");
            exit;
        } else {
          $error_message = "There was a problem sending the email: " . $mail->ErrorInfo;
        }

    }
}

$pageTitle = "Contact Pack 198";
$section = "contact";
$description = "Please fill out the form to send an email to Pack 198.";
include(ROOT_PATH . 'inc/header.php'); ?>

    <div class="section page">

        <div class="main-container">

            <h1>Contact</h1>

            <?php // if status=thanks in the query string, display an thank you message instead of the form ?>
            <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
                <p>Thanks for the email! We&rsquo;ll be in touch shortly!</p>
            <?php } else {

                    if (!isset($error_message)) {
                        echo '<p>We would love to hear from you! Complete the form to send us an email.</p>';
                    } else {
                        echo '<p class="message">' . $error_message . '</p>';
                    }
                ?>

                <form method="post" action="<?php echo BASE_URL; ?>contact/">

                    <table>
                        <tr>
                            <th>
                                <label for="name">Name</label>
                            </th>
                            <td>
                                <input type="text" name="name" id="name" value="<?php if (isset($name)) { echo htmlspecialchars($name); } ?>">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="email">Email</label>
                            </th>
                            <td>
                                <input type="text" name="email" id="email" value="<?php if(isset($email)) { echo htmlspecialchars($email); } ?>">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="message">Message</label>
                            </th>
                            <td>
                                <textarea name="message" id="message"><?php if (isset($message)) { echo htmlspecialchars($message); } ?></textarea>
                            </td>
                        </tr>
                        <tr style="display: none;">
                            <?php // the field named address is used as a spam honeypot ?>
                            <?php // it is hidden from users, and it must be left blank ?>
                            <th>
                                <label for="address">Address</label>
                            </th>
                            <td>
                                <input type="text" name="address" id="address">
                                <p>Humans: please leave this field blank.</p>
                            </td>
                        </tr>
                    </table>
                    <input class= "button" type="submit" value="Send">

                </form>

            <?php } ?>

        </div>

    </div>

<?php include(ROOT_PATH . 'inc/footer.php') ?>
