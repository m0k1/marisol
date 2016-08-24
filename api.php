<?php
use Cmfcmf\OpenWeatherMap;
use Cmfcmf\OpenWeatherMap\Exception as OWMException;
use Mailgun\Mailgun;
// Must point to composer's autoload file.
require 'vendor/autoload.php';
if(isset($_GET["update_weather"]))
{
  // Language of data (try your own language here!):
  $lang = 'en';
  // Units (can be 'metric' or 'imperial' [default]):
  $units = 'metric';
  // Create OpenWeatherMap object.
  // Don't use caching (take a look into Examples/Cache.php to see how it works).
  $owm = new OpenWeatherMap('6c04f7412568212d6d7f33678e21b983');
  try {
      $weather = $owm->getWeather('Budva', $units, $lang);
  } catch(OWMException $e) {
      echo 'OpenWeatherMap exception: ' . $e->getMessage() . ' (Code ' . $e->getCode() . ').';
  } catch(\Exception $e) {
      echo 'General exception: ' . $e->getMessage() . ' (Code ' . $e->getCode() . ').';
  }
  //write $weather->temperature to file
  $fdata = fopen("tempx.txt", "w") or die("Unable to open file!");
  fwrite($fdata, $weather->temperature);
  fclose($fdata);
  echo $weather->temperature;
}
else if(isset($_GET['check']))
{
  var_dump($_POST);
}
else
{

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
  echo "Message is sent, click <a href='https://villa-marisol.me'>HERE</a> to go back.";
}
?>
