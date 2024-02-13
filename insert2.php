<?php
$en=$_POST['cf0'];
$fn=$_POST['cf1'];
$ln=$_POST['cf2'];
$pf=$_POST['cf3'];
$tc=$_POST['selectButton'];
$es=$_POST['cf8'];
$conn=mysql_connect("localhost","root","");
mysql_select_db("registration");
$q="insert into submit values('$en','$fn','$ln','$pf','$tc','$es')";
$result=mysql_query($q,$conn);
if($result!=NULL)
{
echo"Registration Successfull";
}
else
{
echo"Registration unsuccesful";
}
?>