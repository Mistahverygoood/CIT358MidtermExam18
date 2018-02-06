<?php
    $err = 'Connection cannot be established';
    $host = 'localhost';
    $user = 'root';
    $pwrd = 'MVGKenny*72292';
    $db = 'cit358midtermexam';

    $conn = mysqli_connect($host,$user$pwrd) or die($err);
    
      if ( !$conn ){

		print "no database selected";
		exit();
      }
      mysqli_select_db($db);
    
    
    

?>