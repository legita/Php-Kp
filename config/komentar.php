<?
$nama=$_POST['nama'];
$email=$_POST['email'];
$komentar=$_POST['komentar'];
mysql_connect("localhost","root","");
mysql_select_db("komentar");
$result=mysql_query("insert into data values('null','$nama','$email','$komentar')");
if ($result) {
echo "Data Berhasil Dikirim..<br>";
}
echo "<br><a href='1;URL=../faq.php'>Lihat Komentar</a>";
?>