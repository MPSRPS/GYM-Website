<?php
$em=$_POST['email'];
$fna=$_POST['fname'];
$lna=$_POST['lname'];
$pn=$_POST['pnum'];
$ag=$_POST['age'];
$bi=$_POST['bm'];
$hi=$_POST['high'];
$we=$_POST['weigh'];
$ge=$_POST['gender'];
$re=$_POST['address'];
$rd=$_POST['ade'];
$ro=$_POST['aded'];
$ch=$_POST['selbut'];
$yp=$_POST['add'];
$kl=$_POST['sd'];
$conn=mysql_connect("localhost","root","");
mysql_select_db("registration");
$q="insert into submit values('$em','$fna','$lna',$pn,$ag,$bi,$hi,$we,'$ge','$re','$rd','$ro','$ch','$yp','$kl')";
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