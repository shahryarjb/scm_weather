<?php
/**
 * Helper class for Hello World! module
 * 
 * @package    Joomla.Tutorials
 * @subpackage Modules
 * @link http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
 * @license        GNU/GPL, see LICENSE.php
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
class ModScMwEaThEr
{
    /**
     * Retrieves the hello message
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */    
    public static function getHello($params)
    {
        return '';
    }
}

                  $location = $params->get('location');
                  $flocation = $params->get('flocation');
                  $country = $params->get('country');
                  $degree = $params->get('degree');
                  $image = $params->get('image-url');
    
            
function multiexplode ($delimiters,$string) {

   
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
    }

   $doc = new DOMDocument();
if($doc === FALSE){
        error_reporting(0);
        echo "خطا در اتصال به سرور";
    }
    //$doc->load('http://weather.yahooapis.com/forecastrss?p=SFXX0044&u=c');
   $doc->load('https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20weather.forecast%20where%20woeid%20in%20%28select%20woeid%20from%20geo.places%281%29%20where%20text%3D%22'.$location.'%2C%20'.$country.'%22%29&format=xml&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys');
   
    //now I get all elements inside this document with the following name "channel", this is the 'root'
    $channel = $doc->getElementsByTagName("channel");
    $chan= $channel->item(0)->nodeValue;
    
    preg_match_all('/<img src="(.*?)"\/>/', $chan, $n4);
    /////////////////////////////////icon replacement/////////////////////////////////////////////////////////////////////////////////////////////
    preg_match_all("/[0-9]+/", $n4[1][0], $zf);
    //print_r($zf);
    //echo $zf[0][1];
    switch ($zf[0][1]) {
        case 1:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/1.gif","./modules/mod_scmweather/tmpl/images/0502-windy-weather-icon_64.png",$n4[1][0]);
            break;
        case 2:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/2.gif","./modules/mod_scmweather/tmpl/images/0502-windy-weather-icon_64.png",$n4[1][0]);
            break;
        case 3:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/3.gif","./modules/mod_scmweather/tmpl/images/0303-heavy-drizzle-thunders_64.png",$n4[1][0]);
            break;
        case 4:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/4.gif","./modules/mod_scmweather/tmpl/images/0303-heavy-drizzle-thunders_64.png",$n4[1][0]);
            break;
        case 5:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/5.gif","./modules/mod_scmweather/tmpl/images/0404-sleet-freezing-rain-ic_64",$n4[1][0]);
            break;
        case 6:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/6.gif","./modules/mod_scmweather/tmpl/images/0309-hail-weather-icon_64",$n4[1][0]);
            break;
        case 7:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/7.gif","./modules/mod_scmweather/tmpl/images/0404-sleet-freezing-rain-ic_64.png",$n4[1][0]);
            break;
        case 8:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/8.gif","./modules/mod_scmweather/tmpl/images/0403-snow-icon_64.png",$n4[1][0]);
            break;
        case 9:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/9.gif","./modules/mod_scmweather/tmpl/images/0403-snow-icon_64.png",$n4[1][0]);
            break;
        case 10:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/10.gif","./modules/mod_scmweather/tmpl/images/0403-snow-icon_64.png",$n4[1][0]);
            break;
        case 11:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/11.gif","./modules/mod_scmweather/tmpl/images/0309-hail-weather-icon_64.png",$n4[1][0]);
            break;
        case 12:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/12.gif","./modules/mod_scmweather/tmpl/images/0301-drizzle-rain-icon_64.png",$n4[1][0]);
            break;
        case 13:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/13.gif","./modules/mod_scmweather/tmpl/images/0401-snow-weather-icon_64.png",$n4[1][0]);
            break;
        case 14:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/14.gif","./modules/mod_scmweather/tmpl/images/0403-snow-icon_64.png",$n4[1][0]);
            break;
        case 15:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/15.gif","./modules/mod_scmweather/tmpl/images/0907-winter-icon_64.png",$n4[1][0]);
            break;
        case 16:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/16.gif","./modules/mod_scmweather/tmpl/images/0403-snow-icon_64.png",$n4[1][0]);
            break;
        case 17:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/17.gif","./modules/mod_scmweather/tmpl/images/0303-heavy-drizzle-thunders_64.png",$n4[1][0]);
            break;
        case 18:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/18.gif","./modules/mod_scmweather/tmpl/images/0309-hail-weather-icon_64.png",$n4[1][0]);
            break;
        case 19:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/19.gif","./modules/mod_scmweather/tmpl/images/0509-air-dust-pollution-ico_64.png",$n4[1][0]);
            break;
        case 20:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/20.gif","./modules/mod_scmweather/tmpl/images/0409-fog-weather-icon_64.png",$n4[1][0]);
            break;
        case 21:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/21.gif","./modules/mod_scmweather/tmpl/images/0508-mist-haze-icon_64.png",$n4[1][0]);
            break;
        case 22:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/22.gif","./modules/mod_scmweather/tmpl/images/0508-mist-haze-icon_64.png",$n4[1][0]);
            break;
        case 23:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/23.gif","./modules/mod_scmweather/tmpl/images/0502-windy-weather-icon_64.png",$n4[1][0]);
            break;
        case 24:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/24.gif","./modules/mod_scmweather/tmpl/images/0502-windy-weather-icon_64.png",$n4[1][0]);
            break;
        case 25:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/25.gif","./modules/mod_scmweather/tmpl/images/0907-winter-icon_64.png",$n4[1][0]);
            break;
        case 26:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/26.gif","./modules/mod_scmweather/tmpl/images/0205-clouds-weather-icon_64.png",$n4[1][0]);
            break;
        case 27:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/27.gif","./modules/mod_scmweather/tmpl/images/0110-night-clouds-moon-icon_64.png",$n4[1][0]); //maho abr
            break;
        case 28:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/28.gif","./modules/mod_scmweather/tmpl/images/0103-sun-cloud-icon_64.png",$n4[1][0]);
            break;
        case 29:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/29.gif","./modules/mod_scmweather/tmpl/images/0901-full-moon-icon_64.png",$n4[1][0]);
            break;
        case 30:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/30.gif","./modules/mod_scmweather/tmpl/images/0202-sun-cloud-icon_64.png",$n4[1][0]);
            break;
        case 31:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/31.gif","./modules/mod_scmweather/tmpl/images/0901-full-moon-icon_64.png",$n4[1][0]);
            break;
        case 32:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/32.gif","./modules/mod_scmweather/tmpl/images/0101-sun-icon-smile_64.png",$n4[1][0]);
            break;
        case 33:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/33.gif","./modules/mod_scmweather/tmpl/images/0901-full-moon-icon_64.png",$n4[1][0]);
            break;
        case 34:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/34.gif","./modules/mod_scmweather/tmpl/images/0201-sun-weather-icon_64.png",$n4[1][0]);
            break;
        case 35:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/35.gif","./modules/mod_scmweather/tmpl/images/0303-heavy-drizzle-thunders_64.png",$n4[1][0]);
            break;
        case 36:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/36.gif","./modules/mod_scmweather/tmpl/images/0102-sun-smile-glasses-icon_64.png",$n4[1][0]);
            break;
        case 37:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/37.gif","./modules/mod_scmweather/tmpl/images/0306-thunderclouds-weather-_64.png",$n4[1][0]);
            break;
        case 38:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/38.gif","./modules/mod_scmweather/tmpl/images/0306-thunderclouds-weather-_64.png",$n4[1][0]);
            break;
        case 39:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/39.gif","./modules/mod_scmweather/tmpl/images/0301-drizzle-rain-icon_64.png",$n4[1][0]);
            break;
        case 40:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/40.gif","./modules/mod_scmweather/tmpl/images/0301-drizzle-rain-icon_64.png",$n4[1][0]);
            break;
        case 41:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/41.gif","./modules/mod_scmweather/tmpl/images/0403-snow-icon_64.png",$n4[1][0]);
            break;
        case 42:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/42.gif","./modules/mod_scmweather/tmpl/images/0108-cloud-snow-weather-ico_64.png",$n4[1][0]);
            break;
        case 43:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/43.gif","./modules/mod_scmweather/tmpl/images/0108-cloud-snow-weather-ico_64.png",$n4[1][0]);
            break;
        case 44:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/44.gif","./modules/mod_scmweather/tmpl/images/0202-sun-cloud-icon_64.png",$n4[1][0]);
            break;
        case 45:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/45.gif","./modules/mod_scmweather/tmpl/images/0407-rainy-night-icon_64.png",$n4[1][0]);
            break;
        case 46:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/46.gif","./modules/mod_scmweather/tmpl/images/0408-snowing-night-weather-_64.png",$n4[1][0]);
            break;
        case 47:
            $icon = str_replace("http://l.yimg.com/a/i/us/we/52/47.gif","./modules/mod_scmweather/tmpl/images/0407-rainy-night-icon_64.png",$n4[1][0]);
            break;
        }    
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //print_r($n4);
    //now I go through each item withing $channel
    foreach($channel as $chnl)
    {
    //I then find the 'item' element inside that loop
    $item = $chnl->getElementsByTagName("item");
    foreach($item as $itemgotten)
    {
    //now I search within '$item' for the element "description"
    $describe = $itemgotten->getElementsByTagName("description");
    //once I find it I create a variable named "$description" and assign the value of the Element to it
    $description = $describe->item(0)->nodeValue;
  
    $a = multiexplode(array("<br />",",","-",".",":"), $description);
    
/////////////////////english to persian///////////////////////////////////////
    $a = str_replace("Sunny","آفتابی",$a);
    $a = str_replace("PM Showers","ابری",$a);
    $a = str_replace("Mostly Cloudy","تقریبا ابری",$a);
    $a = str_replace("Partly Cloudy","نیمه ابری",$a);
    $a = str_replace("PM Light Rain","باران عصرگاهی",$a);
    $a = str_replace("PM Rain","باران عصرگاهی",$a);
    $a = str_replace("Cloudy","ابری",$a);
    $a = str_replace("AM Rain","بارش صبحگاهی",$a);
    $a = str_replace("Light Rain Late","بارندگی آرام",$a);
    $a = str_replace("Snow","برفی",$a);
    $a = str_replace("Rainy","بارانی",$a);
    $a = str_replace("Rain","باران",$a);
    $a = str_replace("Wind","باد",$a);
    $a = str_replace("Clearing Late","پاکسازی اواخر",$a);
    $a = str_replace("Clear","صاف",$a);
    $a = str_replace("Haze","نامشخص",$a);
    $a = str_replace("Fair","معتدل",$a);
    $a = str_replace("Mostly","تقریبا",$a);
    $a = str_replace("AM Showers","بارش صبحگاهی",$a);
    $a = str_replace("Mist","غبارآلود",$a);
    $a = str_replace("Clouds Early","ابرهای اولیه",$a);
    $a = str_replace("AM Clouds","ابرهای صبحگاهی",$a);
    $a = str_replace("PM Sun","عصر آفتابی",$a);
    $a = str_replace("Showers","بارندگی",$a);
    $a = str_replace("Sat","شنبه",$a);
    $a = str_replace("Sun","یکشنبه",$a);
    $a = str_replace("Mon","دوشنبه",$a);
    $a = str_replace("Tue","سه شنبه",$a);
    $a = str_replace("Wed","چهارشنبه",$a);
    $a = str_replace("Thu","پنجشنبه",$a);
    $a = str_replace("Fri","جمعه",$a);
    $a = str_replace('High',"",$a);
    $a = str_replace('Low',"",$a);
    $a = str_replace('Forecast',"",$a);
//////////////////////////end of translate/////////////////////////////////    
        } // cond
    }   // cond 
    if($degree == 'C'){
    settype($a[17],"integer");
    $a[17] = ($a[17] - 32) * 5/9;
    settype($a[18],"integer");
    $a[18] = ($a[18] - 32) * 5/9;
    }
    if($degree == 'C'){
    settype($a[22],"integer");
    $a[22] = ($a[22] - 32) * 5/9;
    settype($a[23],"integer");
    $a[23] = ($a[23] - 32) * 5/9;
    }
    if($degree == 'C'){
    settype($a[27],"integer");
    $a[27] = ($a[27] - 32) * 5/9;
    settype($a[28],"integer");
    $a[28] = ($a[28] - 32) * 5/9;
    }
    if($degree == 'C'){
    settype($a[32],"integer");
    $a[32] = ($a[32] - 32) * 5/9;
    settype($a[33],"integer");
    $a[33] = ($a[33] - 32) * 5/9;
    }

?>