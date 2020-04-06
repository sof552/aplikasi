<?php  
 $sumber = 'file:///C:/Users/sof/Downloads/data-indonesia-master/data-indonesia-master/kecamatan/1101.json';
 $konten = file_get_contents($sumber);
 $data = json_decode($konten, true);

?>