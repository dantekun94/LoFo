<?php
// Conexiune pe baza de date

include_once("php_includes/db_con.php");

// Upload and Rename File

if (isset($_POST['submit']))
{
	$filename = $_FILES["file"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$filesize = $_FILES["file"]["size"];
	$allowed_file_types = array('.jpg', 'png');	

	if (in_array($file_ext,$allowed_file_types) && ($filesize < 200000000))
	{	
		// Rename file
		$newfilename = md5($file_basename) . $file_ext;
		if (file_exists("upload/" . $newfilename))
		{
			// file already exists error
			echo "You have already uploaded this file.";
		}
		else
		{		
			move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $newfilename);
			echo "File uploaded successfully.";
//          null = NULL;

			$sql1 = mysqli_prepare($db_con, "UPDATE objects SET  `picture`=? WHERE id=5");
			mysqli_stmt_bind_param($sql1, 'b', $null);
			$sql1->send_long_data(0, file_get_contents("upload/" . $newfilename));

			mysqli_stmt_execute($sql1);
			mysqli_stmt_close($sql1);
		}
	}
	elseif (empty($file_basename))
	{	
		// file selection error
		echo "Please select a file to upload.";
	} 
	elseif ($filesize > 2000000)
	{	
		// file size error
		echo "The file you are trying to upload is too large.";
	}
	else
	{
		// file type error
		echo "Only these file typs are allowed for upload: " . implode(', ',$allowed_file_types);
		unlink($_FILES["file"]["tmp_name"]);
	}
}
//    // Adaguarea in baza de date
//    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//} 
//
//$sql = "INSERT INTO images (data_type, title, file_name)
//VALUES ('John', 'Doe', '$newfilename')";
//
//if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}

?>