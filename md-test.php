<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta content="">
    <style></style>
  </head>
  <body>
  <?php
  include 'Parsedown.php';
  echo "<h1>Parsedown test</h1>"; 
  $Parsedown = new Parsedown();
  $myfile = fopen("test.md", "r") or die("Unable to open file!");
 $contents = fread($myfile,filesize("test.md"));
 fclose($myfile);
  echo $Parsedown->text($contents);
  ?>
  </body>
</html>