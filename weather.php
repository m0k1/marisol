<?php
use Cmfcmf\OpenWeatherMap;
use Cmfcmf\OpenWeatherMap\Exception as OWMException;
// Must point to composer's autoload file.
require 'vendor/autoload.php';
if(isset($_GET["update1337"]))
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
else
{
  $fdata = file_get_contents('tempx.txt');
  echo $fdata;
}
?>
