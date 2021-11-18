<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <style>
       .container {
           width: 400px;
       }
   </style>
</head>
<body style="padding-top: 3rem;">
 
<div class="container">
   <?php
   if (($handle = fopen("C:/xampp/htdocs/database/users.csv", "r")) !== FALSE) {
       while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
           $num = count($data);
           for ($c=0; $c < $num; $c++) {
               echo $data[$c]."\n";
           }
           echo "<hr>";
       }
       fclose($handle);
   }
   ?>
   <a class="btn" href="adduser.php">return back</a>
</div>
</body>
</html>