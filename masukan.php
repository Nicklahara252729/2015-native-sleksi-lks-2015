<?php include"header-menu.php"; ?>
<link href="CSS/conten.css" rel="stylesheet" type="text/css">
<div id="conten"><div id="comment"><form action="sc.php" method="POST">
<style>
#comment {
margin:20px 0 0 20px;
border: 2px solid #848484;
border-radius:20px;
-moz-border-radius:20px;
max-height: 90%;
font-weight: bold;
color: #606060;
padding: 10px;
width: 440px;
background-color: #dcdcdc;
}
#publishcomment {
border: 2px solid #848484;
box-shadow: 0px 0px 10px 0px #888888;
margin: 30px 0 50px 20px;
padding: 10px;
max-height: 100%;
color: #3d3d3d;
width: 550px;
font-size: 12px;
line-height: 15px;
}
#publishcomment hr {
color: #ccc;
}
#publishcomment a {
color: #da5700;
text-decoration: none;
font-weight:normal;
}
#publishcomment a:link {
font-weight: bold;
}
#publishcomment a:hover {
text-decoration: underline;
}
</style>
Nama:<br><input name="nama" type="text" /><br>
Email:<br><input name="email" type="text" /><br>
Komentar:<br><textarea name="comment" rows="6" cols="50"></textarea><br>
<input name="tombol" value="Kirim" type="submit">
</form></div><div id="publishcomment">
<?php include"publishcomment.php";?></div>
</div>
<?php include"footer.php"; ?>