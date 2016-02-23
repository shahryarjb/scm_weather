<?php 
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_category
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access
defined('_JEXEC') or die; 
JHtml::stylesheet(JURI::root().'modules/mod_scmweather/tmpl/css/style.css');
JHtml::stylesheet(JURI::root().'modules/mod_scmweather/tmpl/css/reset.css');
?>
<style>
 
   .container-scm{
    background-image: url("<?php echo $image; ?>");
    background-repeat: no-repeat;;
  }
  
</style>

		


  <div class="container-scm">
    <div class="city-title"><?php echo $flocation; ?></div>
    <div class="city-weather-temperature"  id="city-weather-temperature"><?php echo $location; ?>
    </div>
    <div class="city-weather-description" id="city-weather-description">
   <?php 
   settype($a[8],"integer");
    if($degree == 'C'){
        $a[8] = ($a[8] - 32) * 5/9;
      
        echo  "<div id='swithc'>"." " . "" . round($a[8]) . " درجه سانتی گراد ";
    }else{
           echo  "<div id='swithc'>"." " . "" . round($a[8]) . " درجه فارن هایت";
    }
      

   ?>
    </div>
    <img src="<?php echo $icon; ?>" alt="weather-icon" class="city-weather-icon" id="city-weather-icon" />

    <div id="who">
<table class="scmwh" style="border-color: transparent; margin-left: auto; margin-right: auto; padding-bottom: 3px;min-height: 190px" width="240" cellspacing="1" cellpadding="1">
<tbody>
<tr> 
<td> <?php echo $a[9]; ?></td>
<td> <?php echo $a[10]; ?></td>
<?php if($degree == 'C') { 
    settype($a[12],"integer");
    $a[12] = ($a[12] - 32) * 5/9;
    settype($a[13],"integer");
    $a[13] = ($a[13] - 32) * 5/9;
    } ?>
<td> <?php echo "بالا :" . round($a[12]); ?></td>
<td> <?php echo "پایین :" . round($a[13]); ?></td>
</tr>
<tr>
<td><?php echo $a[14]; ?></td>
<td><?php echo $a[15]; ?></td>
<td><?php echo "بالا :" . round($a[17]); ?></td>
<td><?php echo "پایین :" . round($a[18]); ?></td>
</tr>
<tr>
<td><?php echo $a[19]; ?></td>
<td><?php echo $a[20]; ?></td>
<td><?php echo "بالا :" . round($a[22]); ?></td>
<td><?php echo "پایین :" . round($a[23]); ?></td>
</tr>
<tr style="
    border: 0;">
<td><?php echo $a[24]; ?></td>
<td><?php echo $a[25]; ?></td>
<td><?php echo "بالا :" . round($a[27]); ?></td>
<td><?php echo "پایین :" . round($a[28]); ?></td>
</tr>
<div class="clr"></div>
</tbody>
</table>
<div style="clear: both;"> </div>
    </div> <!-- who -->
      </div> <!-- end nav-info #offices-->
    </div> <!-- end content -->  
    <script src="./modules/mod_scmweather/tmpl/js/jquery.min.js"></script>