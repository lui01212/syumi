<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
//require( dirname( __FILE__ ) . '/wp-blog-header.php' );
?>
<?php
$val = 'aloa';
$stringInt = 'ssss22dsdsd'; 
$ep = (int)$stringInt;
$int = 2 + 3 ;
define('luyn','oke');
$boolean = true;
echo  var_dump(is_int(@$stringInt));
$array =  array('1' => 'kk','3' =>'aa');
//print_r($array);
echo "luyn ";
var_dump($int >1);
//for($ix = 0 ;$ix < count($array) ;$ix ++){
//    echo $array[$ix];
//}
foreach($array as $key => $indexx){
    echo  $key .'=>'.$indexx;
}
?>
