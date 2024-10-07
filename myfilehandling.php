<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action=" " method="post" enctype="multipart/form-data">
    Upload my file: <input type="file" name="fileup">
  <input type="submit" name="upload" value="UPLOAD MY FILE">
</form>
<?php
print_r($_FILES["fileup"]);
$file_name=$_FILES["fileup"]["name"];
$file_size=$_FILES["fileup"]["size"];
$file_tmpname=$_FILES["fileup"]["tmp_name"];
$file_error=$_FILES["fileup"]["error"];
$file_ext=pathinfo($file_name,PATHINFO_EXTENSION);
echo "$file_name"."<br>";
echo "$file_size"."<br>";
echo "$file_tmpname"."<br>";
echo "$file_error"."<br>";
echo "$file_ext"."<br>";
if(!is_dir("Stuti")){
  mkdir("Stuti",0777);
}
if(move_upload_file($file_tmpname,"Stuti".$file_name)){
  echo "File is uploaded";
}
if($file_size>200){
  echo"File cannot be uploaded on the server";
}
$allowed_file_type=[jpg,png,jpeg,gif];
if(in_array($file_ext,$allowed_file_type)){
  echo "File type is supported";
}else{
  echo "File type is not supported";
}
?>
</body>
</html>