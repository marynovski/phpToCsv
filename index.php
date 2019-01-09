<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include_once 'File.php';
            include_once 'Curl.php';
            
            $file = new File("file.csv", "w");
            try{
                $fileHandle = $file->openFile();
            }catch(Exception $e){
                echo $e->getMessage();
                exit(1);
            }
            $curl = new Curl("curl", "https://www.tuwroclaw.com/katalog-firm,kfi1,a.html", $fileHandle);
            $curl->convert();
            echo "File has been coverted succesfully!";
        ?>
    </body>
</html>
