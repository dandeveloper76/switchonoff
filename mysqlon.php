<HTML>
<HEAD>
<TITLE>Update original</TITLE>
</HEAD>
<BODY>
<?
//Conexion con la base
mysql_connect("localhost","root","TUCONTRASEÑA");

//selección de la base de datos con la que vamos a trabajar 
mysql_select_db("bloqueo"); 
//Creamos la sentencia SQL y la ejecutamos
$sSQL="Update users Set username='David' Where id='1'";
mysql_query($sSQL);
?>


</BODY>
</HTML>
