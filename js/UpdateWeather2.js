if(!window.jQuery)
{
   alert("Hello! I am an alert box!!");
}
function UpdateWeather()
{
  $( "#weatherp" ).load( "/weather.php" );
}

window.onload = function ()
{
  UpdateWeather();
}
