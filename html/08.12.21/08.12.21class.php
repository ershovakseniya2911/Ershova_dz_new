<?php
echo '<pre>';
print_r($_FILES);

?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='<php echo $style; ?/>' type='text/css' media='all'>

    <title>Mypage</title>
</head>
<body>
<form method="post" action="" enctype="multipart/form-data">
    <p>Name</p>
    <input type="text" name="fact">
    <input type="submit">
    <input type="file" name="file">
</form>
<?php
move_uploaded_file($temp_name, $image_dir)
?>

</body>
</html><html>
