<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="fileUpload">
        <button type="submit">Send</button>
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $file = $_FILES["fileUpload"];

            if($file["error"]){
                throw new Exception("Error:".$file["error"]);
            }

            $dirUploads = "uploads";

            if(!is_dir($dirUploads))
            {
                mkdir($dirUploads);
            }

            if(move_uploaded_file($file["tmp_name"], $dirUploads.DIRECTORY_SEPARATOR.$file["name"]))
            {
                echo 'upload realizado com secesso!';
            }
            else{
                throw new Exception('Naõ foi possivel fazer upload.');
            }
        }
    ?>
</body>
</html>
