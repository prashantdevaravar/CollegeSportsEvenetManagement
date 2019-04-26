
<?php
&nm=$_GET["n"];
&pw=$_GET["p"];
mysql_connect("localhost","root","");
mysql_select_db("testing");
mysql_query("insert into test values('&nm','&pw')");
?>
