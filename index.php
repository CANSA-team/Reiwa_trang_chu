<?php
session_start();
require_once 'config/database.php';
require_once 'config/config.php';
spl_autoload_register(function ($class_name) {
    require 'models/' . $class_name . '.php';
});
if (!isset($_GET['action'])) {
    $_GET['action'] = 'index';
}

require "controllers/Controller.php";
?>
<!-- "<br />
<font size='1'><table class='xdebug-error xe-warning' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Warning: require_once(config/database.php): failed to open stream: No such file or directory in D:\git\Reiwa_trang_chu\controllers\GetStaff.php on line <i>2</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0005</td><td bgcolor='#eeeeec' align='right'>409832</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='D:\git\Reiwa_trang_chu\controllers\GetStaff.php' bgcolor='#eeeeec'>...\GetStaff.php<b>:</b>0</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-fatal-error' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Fatal error: require_once(): Failed opening required 'config/database.php' (include_path='.;C:\php\pear') in D:\git\Reiwa_trang_chu\controllers\GetStaff.php on line <i>2</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0005</td><td bgcolor='#eeeeec' align='right'>409832</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='D:\git\Reiwa_trang_chu\controllers\GetStaff.php' bgcolor='#eeeeec'>...\GetStaff.php<b>:</b>0</td></tr>
</table></font>
" -->