<?php
/* @name: header
 * @auther: Manish Sahu
 * @created On: Jan 22, 2013, 11:04:11 PM
 */
require_once ("../constants/Constants.php");
$constants = new Constants();
?>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $constants->IMAGE_PATH; ?>favicon.ico" />
<link rel="stylesheet" type="text/css" href="<?php echo $constants->DOMAIN_URL; ?>css/style.css" />
<script type="text/javascript" src="<?php echo $constants->DOMAIN_URL; ?>js/jquery-1.6.1.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="<?php echo $constants->DOMAIN_URL; ?>js/GYKUtils.js"></script>
<meta name="language" content="en_US" />
<meta name="revised" content="<?php echo date('D, n M, Y H:i:s A'); ?>" />
<meta name="robots" content="index, follow" />