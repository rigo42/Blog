<?php
//Enrutadores
define('DS',DIRECTORY_SEPARATOR);
define('ROOT',realpath(dirname(__FILE__)).DS);

//localhost
define('URL',"http://localhost/blogg/");

//hostinger hotelplazalosreyes.com
//define('URL',"http://miblogrvr.epizy.com/");

//Ejecutar funcion automatizada
require_once('ajuste/autoload.php');
require_once('ajuste/enrutador.php');
require_once('ajuste/request.php');

autoload::run();
enrutador::run(new request());
?> 
