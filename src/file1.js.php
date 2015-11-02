<?php
/*
 * @file all.js.php
 * @author Stefan Jonker (programmer at stefanjonker dot nl)
 * @date 01-11-2015
 *
 * Created: Sun 01-11-2015, 17:04:33 (:-0600)
 * Last modified: Sun 01-11-2015, 21:01:50 (-0600)
 */
?>
<?php
header('Content-type: application/javascript');
 
/* With trailing slash */
$files = array(
  dirname(__FILE__) . '/../js/1.js',
  dirname(__FILE__) . '/../js/2.js',
  dirname(__FILE__) . '/../js/3.js',
  dirname(__FILE__) . '/../js/jquery.min.js',
  dirname(__FILE__) . '/../js/4.js',
  dirname(__FILE__) . '/../js/5.js',
  dirname(__FILE__) . '/../js/jquery.embedly.min.js',
  dirname(__FILE__) . '/../js/6.js',
  dirname(__FILE__) . '/../js/7.js',
  dirname(__FILE__) . '/../js/8.js',
  dirname(__FILE__) . '/../js/9.js',
  dirname(__FILE__) . '/../js/10.js'
);
 
foreach ($files as $file) {
  include($file);
}
?>
