<?php










$mot=$_POST['field-keywords'];
$auteur=$_POST['field-author'];
$titre=$_POST['field-title'];
$ISBN=$_POST['field-isbn'];
$editeur=$_POST['field-publisher'];
$collection=$_POST['field-collection'];
$rebrique=$_POST['node'];
$format=$_POST['field-binding_browse-bin'];
$dates=$_POST['field-dateop'];
$mois=$_POST['field-datemod'];
$annees=$_POST['field-dateyear'];
$sort=$_POST['sort'];

if($mot=="livre"){
    print "hello world";
}





$servername="localhost";
$username="root";
$password="";

$connection=new mysqli($servername,$username,$password);
if($connection->connect_error){
    echo("error");
}
else{
    echo('Connected');
}
















?>