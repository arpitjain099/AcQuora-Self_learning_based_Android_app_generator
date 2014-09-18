<html><head><link rel="stylesheet" type="text/css" href="background.css"></head>
</html><?php
{
 {
if (isset($_POST['submit'])){
 
$csvDirectory = "csv/";
$thumbDirectory = "csvimage/";
 
//get the name of the file
$filename = basename( $_FILES['csv']['name'], ".csv");
 
//remove all characters from the file name other than letters, numbers, hyphens and underscores
$filename = preg_replace("/[^A-Za-z0-9_-]/", "", $filename).".csv";
 
//name the thumbnail image the same as the csv file
$thumb = basename($filename, ".csv");
 
    if(move_uploaded_file($_FILES['csv']['tmp_name'], $csvDirectory.$filename)) {
     
    //the path to the csv file
    $csvWithPath = $csvDirectory.$filename;
     
    //add the desired extension to the thumbnail
    $thumb = $thumb.".jpg";
     
    }
}
 }}
?>
 <form method="post" action="" enctype="multipart/form-data">
    <input type="file" name="csv" />
    <input type="submit" name="submit" value="Upload" />
</form>

