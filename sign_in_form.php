<?php
$conn=mysql_connect("localhost","root","");
if(!$conn)
{
die("not connect to server");
}
if(!mysql_select_db("signup",$conn))
{
die("Not connect to database");

}
$Name=$_POST['uname'];
$pass=$_POST['psw'];
$sql="INSERT INTO Anshika(name,pass) values('$Name','$pass')";
if(mysql_query($sql))
{
echo "your data to inserted";
}
else
{
echo "not data insertted";
}
?>
