<?php

	$conn = mysqli_connect('phpmysqldb.mysql.database.azure.com','azeez','Babalola@1234','musical_world');

	if(!$conn)
		die("Error while connecting...!").mysqli_connect_error($conn);
		
 ?>
