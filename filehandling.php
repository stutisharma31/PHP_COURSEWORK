<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Upload</title>
</head>
<body>
  <form action="" method="post" enctype="multipart/form-data">
    Upload my file: <input type="file" name="fileup">
    <input type="submit" name="upload" value="UPLOAD MY FILE">
  </form>

  <?php
  if(isset($_FILES["fileup"])){  
      $file_name = $_FILES["fileup"]["name"];
      $file_size = $_FILES["fileup"]["size"];
      $file_tmpname = $_FILES["fileup"]["tmp_name"];
      $file_error = $_FILES["fileup"]["error"];
      $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

      echo "File name: $file_name<br>";
      echo "File size: $file_size bytes<br>";
      echo "Temporary location: $file_tmpname<br>";
      echo "Error: $file_error<br>";
      echo "File extension: $file_ext<br>";

      if(!is_dir("Stuti")){
        mkdir("Stuti", 0777);
      }

      $allowed_file_type = ['jpg', 'png', 'jpeg', 'gif'];

      if(in_array(strtolower($file_ext), $allowed_file_type)){
          echo "File type is supported.<br>";

          if($file_size <= 200 * 1024){ 
              if(move_uploaded_file($file_tmpname, "Stuti/" . $file_name)){
                  echo "File has been uploaded successfully.<br>";
              } else {
                  echo "Failed to move the file.<br>";
              }
          } else {
              echo "File size exceeds the limit of 200KB.<br>";
          }
      } else {
          echo "File type is not supported.<br>";
      }
  }
  ?>
</body>
</html>
