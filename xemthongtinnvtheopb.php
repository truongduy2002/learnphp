<?php
$mapb = $_REQUEST['IDPB'];
$link = mysqli_connect('localhost','root','') or die('could not connect: '.mysql_error());
$db_selected = mysqli_select_db($link, 'dulieu');
if($mapb=="")  $rs = mysqli_query($link,"SELECT * FROM nhanvien");
else $rs = mysqli_query($link,"SELECT * FROM nhanvien Where IDPB='$mapb'");
echo '<table border="1" width="100%">';
echo '<caption>Du lieu bang Nhan vien </caption>';
//Tieu de bang chua du lieu khi hien thi tren Web
echo '<TR><TH>IDNV</TH><TH>Ho ten</TH><TH>IDPB</TH><TH>Dia chi</TH></TR>';
//Hien thi tung bang
while($row=mysqli_fetch_array($rs)){
    echo '<TR><TD>'.$row['IDNV'].'</TD><TD>'.$row['Hoten'].'</TD><TD>'.$row['IDPB'].'</TD><TD>'.$row['DiaChi'].'</TD></TD>';
}
echo '</TABLE>';
mysqli_free_result($rs);mysqli_close($link);
?>