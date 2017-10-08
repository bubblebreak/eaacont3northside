
<!-- connection file -->


<?php 
 //Connect to localhost with the user "root" and password

    $dbc =mysqli_connect("localhost","root","","northside") or die (mysqli_connect() ); //first - the server, second - the user, third - the password (Depends on xampp, empty, or any other,root), fourth - database... If not working, error message will present


//set encoding to mach out php-script

mysqli_set_charset($dbc, 'uft8');


?>