

<?php
$nik = '';
if (isset($_POST['nik'])) {
    $nik = trim($_POST['nik']);
}

function bulan($i) {
    $i = intval($i) - 1;
    $data = array(
        'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    if (isset($data[$i])) {
        return trim($data[$i]);
    }
    return '<span class="error">Invalid</span>';
}

function kode_kota_kabupaten($i)
{
    $i = intval($i);
    $data = array(
        01 => 'Kerinci',
        02 => 'Merangin',
        03 => 'Sarolangun',
        04 => 'Batanghari',
        05 => 'Muaro Jambi',
        06 => 'Tanjung Jabung Barat',
        07 => 'Tanjung Jabung TImur',
        08 => 'Bungo',
        09 => 'Tebo',
        71 => 'Jambi',
        72 => 'Kota Sungai Penuh'
    );
    if (isset($data[$i])) {
        return trim($data[$i]);
    }
    return '<span class="error">Invalid</span>';
}

function kode_provinsi($i) {
    $i = intval($i);
    $data = array(
        11 => 'Aceh',
        12 => 'Sumatera Utara',
        13 => 'Sumatera Barat',
        14 => 'Riau',
        15 => 'Jambi',
        16 => 'Sumatera Selatan',
        17 => 'Bengkulu',
        18 => 'Lampung',
        19 => 'Kep. Bangka Belitung',
        21 => 'Kep. Riau',
        31 => 'DKI Jakarta',
        32 => 'Jawa Barat',
        33 => 'Jawa Tengah',
        34 => 'Yogyakarta',
        35 => 'Jawa Timur',
        36 => 'Banten',
        51 => 'Bali',
        52 => 'Nusa Tenggara Barat',
        53 => 'Nusa Tenggara Timur',
        61 => 'Kalimantan Barat',
        62 => 'Kalimantan Tengah',
        63 => 'Kalimantan Selatan',
        64 => 'Kalimantan Timur',
        71 => 'Sulawesi Utara',
        72 => 'Sulawesi Tengah',
        73 => 'Sulawesi Selatan',
        74 => 'Sulawesi Tenggara',
        75 => 'Gorontalo',
        76 => 'Sulawesi Barat',
        81 => 'Maluku',
        82 => 'Maluku Utara',
        91 => 'Papua Barat',
        94 => 'Papua'
    );
    if (isset($data[$i])) {
        return trim($data[$i]);
    }
    return '<span class="error">Invalid</span>';
}

function kode_kecamatan($i)
{
    $i = intval($i);
    $data = array(
        01 => 'Telanai Pura',
        02 => 'Jambi Selatan',
        03 => 'Jambi Timur',
        04 => 'Pasar Jambi',
        05 => 'Pelayangan',
        06 => 'Danau Teluk',
        07 => 'Kota Baru',
        08 => 'Jelutung',

    );
    if (isset($data[$i])) {
        return trim($data[$i]);
    }
    return '<span class="error">Invalid</span>';
}

?>



<html>
<head>
    <title>Cek NIK</title>
    <link href="sof.png" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>
<body style="background-image: url(pricing-bg.png);">
    <div class="text-center p-3 mb-3" style="border-bottom:8px solid #ccc;">
        <h1><span class="badge badge-danger"><strong><font face="Harlow Solid Italic">Nomor Induk Kependudukan</font></strong></span></h1>
        <h5><span class="badge badge-danger"><strong><font face="Times New Roman">NIK </font></strong></span></h5>
    </div>
<div class="card-body">
    <div class="table-responsive service">
    <form method="post">
        <input type="hidden" name="go" value="1" />
        <h5><label class="badge badge-danger"><font face="Harlow Solid Italic">NIK (16 Digit)</font></label></h5>
        <div class="form-group form-inline">
            <input class="form-control" rows="3" autocomplete="off"  type="number" name="nik" value="<?php echo htmlentities($nik); ?>" placeholder="Masukan NIK" require>
        </div>
        <button type="submit" class="btn bg-primary text-light">Cek Data KTP</button>
    </form>
<?php
if (isset($_POST['go'])) {
    if (strlen($nik) != 16) {
        echo '<div class="error"><h4><span class="badge badge-danger"><font face="Times New Roman">Panjang NIK harus 16 angka. Input Anda = '.strlen($nik).' angka</font></span></h4></div>';
    } else {
        $data = array();
        $data['provinsi']       = substr($nik, 0, 2);
        $data['kota']           = substr($nik, 2, 2);
       //$data['kota']          = substr($nik, 0, 4);
        $data['kecamatan']      = substr($nik, 4, 2);
        $data['tanggal_lahir']  = substr($nik, 6, 2);
        $data['bulan_lahir']    = substr($nik, 8, 2);
        $data['tahun_lahir']    = substr($nik, 10, 2);
        $data['unik']           = substr($nik, 12, 4);
        if (intval($data['tanggal_lahir']) > 40) {
            $data['tanggal_lahir_2'] = intval($data['tanggal_lahir']) - 40;
            $JK = 'Wanita';
        } else {
            $data['tanggal_lahir_2'] = intval($data['tanggal_lahir']);
            $JK = 'Laki-Laki';
        }
        //echo '<pre>';
        //print_r($data);
        //echo '</pre>';
        ?>
       
        <table class="table  table-bordered table-hover table-stripted">
             <thead>
            <tr class="bg-primary text-light">
                <th><center>NIK</center></th>
                <th><center>Provinsi</center></th>
                <th><center>Kota / Kabupaten</center> </th>
                <th><center>Kecamatan</center> </th>
                <th><center>TGL Lahir</center> </th>
                <th><center>Gender</center> </th>
               
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><center><?php echo htmlentities($nik); ?></center></td>
                <td><center><?php echo kode_provinsi($data['provinsi']); ?></center> </td>
                <td><center><?php echo kode_kota_kabupaten($data['kota']); ?></center></td>
                <td><center><?php echo kode_kecamatan ($data['kecamatan']); ?></center></td>
                <td><center><?php echo $data['tanggal_lahir']; ?>-<?php echo bulan($data['bulan_lahir']); ?>-
                    <?php echo "19".$data['tahun_lahir']; ?></center></td>
                <td><center><span style="font-weight:900;color:#00F"><?php echo $JK; ?></span></center>
                </td>
            </tr>

            </tbody>
        </table>
        <?php
    }
}
?>
<br>
<br>

</div>
</div>
</body>
<footer>
  <center><font color="#999999"><small><?php
$tanggal = time () ;
//Untuk mengambil data waktu dan tanggal saat ini dari server 
$tahun= date("Y",$tanggal);
//Memformat agar hanya menampilkan tahun 4 digit angka dengan Y (kapital)
echo "Copyright @ 2019 - " . $tahun;
/* baris ini mencetak rentang copyright,
Anda perlu mengganti 2011 dengan tahun pertama kali website Anda diluncurkan */
?> Sof-Web. All rights reserverd.</small></font></center>
</footer>
</html>