


<?php

/*Method 1*/

/*Assign upload directory*/
$target_dir = "upload/";

/*Assign the file path to the varibale($target_file)*/
$target_file = $target_dir . basename($_FILES['loaded_file']['name']);

/*Move the file to assign location or directory*/
if(move_uploaded_file($_FILES['loaded_file']['tmp_name'],$target_file))
{
	/*Show if the file was moved successfully*/
	echo "file uploaded";
}
else
{
	/*Show if the file was not able to move*/
	
    echo "Error 404 ";
}


/*Metod 2*/

/*Get the name of uploaded file*/

// $filename = $_FILES['file_name']['name'];

/*Choose where the file has to be saved */
// $location = "uploads/".$filename;

// if(move_uploaded_file($_FILES['file_name']['tmp_name'],$target_file))
// {
	/*Show if the file was moved successfully*/
	// echo "file uploaded";
// }
// else
// {
	/*Show if the file was not able to move*/
	
    // echo "Error 404 ";
// }







 
?>


