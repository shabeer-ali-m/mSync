<?php
/**
* msync : MYSQL SYNC  0.0.1
* Developed By : Shabeer Ali M & Harish U Warrier
*/

/*
* mysql configuration eg: localhost
*/
$hostname = "localhost";
$cfg[$hostname]['host'] = 'localhost';
$cfg[$hostname]['user'] = 'root';
$cfg[$hostname]['password'] = '';
$cfg[$hostname]['database'] = 'brevity';


/*
* mysql configuration eg: yourdomain.com
* Note : To update mysql db from different host you need to grant remote access.
*/

$hostname = "yourdomain.com";
$cfg[$hostname]['host'] = 'localhost';
$cfg[$hostname]['user'] = 'root';
$cfg[$hostname]['password'] = 'root';
$cfg[$hostname]['database'] = 'brevity';

?>