<?php 
	 $link= mysqli_connect("localhost","root","");
     mysqli_select_db($link, "librarian");
     if(! $link ){
        die('Could not connect: ' . mysqli_error());
     }
 ?>


