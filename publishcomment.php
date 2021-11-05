<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "nicolahara";
$connect=mysql_connect($host, $username, $password);
$pilihdatabase = mysql_select_db($database,$connect);
if($pilihdatabase){
	
}else{
echo "Tidak dapat connect ke database";
}
?>
<?php
	$commentquery	= mysql_query("SELECT * FROM komentar")or die .mysql_error();
	$commentNum		=mysql_num_rows($commentquery);
echo"<h4>"."Current comment(s)..."."</h4>";
echo"<b>".$commentNum."comment(s)so far. Leave a comment..."."</b>"."<br/>"."<br/>";	
echo"<hr>";
while($row=mysql_fetch_array($commentquery))
{
	echo"<b>".$row['nama']."</b>".""."|".""."<i>".$row['date']."</i>"."<br/>"."<br/>".$row['comment']."<br/>";
	echo"<hr>";

}
?>