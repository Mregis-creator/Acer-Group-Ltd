<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'alain_bikes');

// Uploads files
if (isset($_POST['save'])) 
{ 
     // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'C:/wamp/www/Upload/Upload/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];
     if ($_FILES['myfile']['size'] > 3000000) { // file shouldn't be larger than 2Megabyte
        echo "File too large!";
} 
else 
{
    // move the uploaded (temporary) file to the specified destination
 if (move_uploaded_file($file, $destination)) 
 {
    $a = $_POST['b_names'];
    $c = $_POST['distance'];
    $d = $_POST['price'];
    $sql = "INSERT INTO bike_info (b_names, distance, price, filename, size) VALUES ('$a','$c', $'d' '$filename', '$size')";
        if (mysqli_query($conn, $sql)) 
        {
               include 'gallery.html';

        }
 } 
else 
  {
    echo "Failed to upload file.";
  }
}
}
?>