<?php
//-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-==-=-
//
// File name: 	    define.inc.php
//
// File purpose: 	This is the place to define useful global constants
//
//-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-==-=-
// Set Time Zone
//
putenv("TZ=US/Eastern");

// Include files containing parts of each website page
//
define("INC_NAVBAR", "includes/navbar.inc.php");
define("INC_FOOTER", "includes/footer.inc.php");


// General defines
//
define("WEBSITE_NAME", "GFERROS");
define("WEBSITE_URL", "https://gferros.github.io");
define("DEV_COMPANY_NAME", "gferros");
define("DEV_COMPANY_URL", "https://gferros.github.io");
define("WEBSITE_FROMEMAIL", "gaferris1@gmail.com");
define("WEBSITE_TOEMAIL", "gaferris1@gmail.com");

// Page titles
//
define("T_BASESTEM", WEBSITE_NAME . " | ");
define("T_HOME_PAGE", "Home");

// Error messages
//
define("T_400", T_BASESTEM . "Error 400");
define("T_401", T_BASESTEM . "Error 401");
define("T_402", T_BASESTEM . "Error 402");
define("T_403", T_BASESTEM . "Error 403");
define("T_404", T_BASESTEM . "Error 404");
define("T_500", T_BASESTEM . "Error 500");
?>