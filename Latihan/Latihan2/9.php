<?php
$arrWarna = array ("blue","black","red","yellow","green");

echo "menampilkan isi array dengan for: <br>";
for ($i=0; $i < count($arrWarna); $i++) {
  echo "do you like <font color = $arrWarna[$i]>" . $arrWarna[$i] . "</font>
  ?<br>";
}
echo "menampilkan isi array dengan foreach : <br>";
foreach ($arrWarna as $warna ) {
  echo "do you like <font color = $warna>" . $warna . "</font>
  ?<br>";
}
 ?>
