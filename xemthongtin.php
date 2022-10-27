<?php
$link = mysqli_connect('localhost','root', '', 'dulieu', 3309) or die('could not connect: '.mysqli_error());
$db_selected = mysqli_select_db($link, 'dulieu');
$rs = mysqli_query($link,"SELECT * FROM phongban");
echo '<table border="1" width="100%">';
echo '<caption>Du lieu bang Phong Ban </caption>';
echo '<TR><TH>IDPB</TH><TH>Ten Phong Ban </TH><TH>Mo Ta</TH><TH>Xem Nhan Vien</TH></TR>';
while($row=mysqli_fetch_array($rs)){
    echo '
    <TR>
        <TD>'.$row['IDPB'].'</TD>
        <TD>'.$row['Tenpb'].'</TD>
        <TD>'.$row['Mota'].'</TD>
        <TD><A href="XemThongTinNVPB.php?IDPB='.$row['IDPB'].'">Xem Thong Tin</A></TD>
    </TR>';
}
echo '</TABLE>';
mysqli_free_result($rs);mysqli_close($link);
?>