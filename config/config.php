<?php

if($_SERVER['HTTP_HOST'] == 'localhost'){

    define("BASE_URL","http://localhost/AJ-LMS-CPP/");
define("DIR_URL",$_SERVER["DOCUMENT_ROOT"] . "/AJ-LMS-CPP/");

}

else{
    define("BASE_URL","http://lms.com");
define("DIR_URL",$_SERVER["DOCUMENT_ROOT"]);
}



?>