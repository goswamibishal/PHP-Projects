
<?php
$f=$_FILES ['myfile'];
//echo $username;
echo "NAME".$f['name'];
echo"</br>";
echo "FILE TYPE".$f['type'];
echo "</br>";
echo "FILE SIZE".$f['size'];
if(file_exists("photos/".$f['name']))
{
	echo ("file already exists");
}
elseif($f['size']>300000)
{
	echo"file too large";
}
elseif ($f['type']=="image/jpeg")
{
move_uploaded_file($f['tmp_name'],"photos/".$f['name']);
}
else
{
	echo "invalid input";
}
?>

?>













