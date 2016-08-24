function UpdateWeather()
{
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("weatherp").textContent= this.responseText;
    }
  };
  xmlhttp.open("GET", "weather.php", true);
  xmlhttp.send();
}

window.onload = function ()
{
  UpdateWeather();
}
