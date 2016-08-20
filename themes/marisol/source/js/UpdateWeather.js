function UpdateWeather()
{
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
          document.getElementById("myspan").textContent="<i class='hillter-icon-cloud'></i> ".xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET", "https://api.m0k1.org/marisol/weather.php", false);
    xmlhttp.send();
}

window.onload = function ()
{
  UpdateWeather();
}
