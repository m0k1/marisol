<?php
require 'vendor/autoload.php';
use Mailgun\Mailgun;
# First, instantiate the SDK with your API credentials and define your domain.
$mg = new Mailgun("key-4622c2445014f16b6424838f2030ffbb");
$domain = "mg.villa-marisol.me";
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$text = "Nova poruka od ".$name."\r\n".$message."\r\n\r\n"."Email na koji treba odgovoriti:\r\n".$email;

# Now, compose and send your message.
$mg->sendMessage($domain, array('from'    => 'contact@villa-marisol.me',
                                'to'      => 'moki.forum@gmail.com',
                                'subject' => '[marisol] Nova Sajt Poruka',
                                'text'    => $text));
?>
