<?php
$me=$_POST['yn'];
$ey=$_POST['ye'];
$py=$_POST['yp'];
$my=$_POST['ym'];
$conn=mysql_connect("localhost","root","");
mysql_select_db("registration");
$q="insert into contact values('$me','$ey',$py,'$my')";
$result=mysql_query($q,$conn);
if($result!=NULL)
{
echo"Message Sent";
}
else
{
echo"Message Not Sent";
}
?>