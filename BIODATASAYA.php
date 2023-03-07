<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="atributBiodata.css">
    <title>Biodata</title>
</head>
<body>
    <div class="container">
        <div class="box">
            <h1 style="font-size: 50px;">BIODATA</h1>
            <center>
                <img src="fotosaya.jpeg" alt="Foto diri" class="lingkaran">
            </center>
            <br>
            <br>
            <center><table style="text-align: left; height: 140px;" >
                <tr>
                    <td>
                        <?php echo "Nama"?>
                    </td>
                    <td>
                          <?php echo " :Muhammad Yustaf Lana Badriul Hegar" ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo "Tempat / Tanggal Lahir" ?>
                    </td>
                    <td>
                        <?php echo ": KLATEN 21 Januari 2003"?>
                    </td>
                </tr>
                <tr>
                    <td>Usia</td>
                    <?php $tl = "2003-01-21"; ?>
                    <?php $usia = date_diff(date_create($tl), date_create('today'))->y;?>
                    <td><?php echo ":",  $usia . " Tahun"?></td>
                </tr>
                <tr>
                    <td>
                        <?php echo"Alamat" ?>
                    </td>
                    <td>
                    <?php echo ": Kecamatan Kanor, Kab. Bojonegoro" ?>
                    </td>    
                </tr>
                <tr>
                    <td>
                        <?php echo "Email" ?>
                    </td>
                    <td>
                        <?php echo ": myustaflana151@gmail.com" ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php echo "No.Handphone" ?>
                    </td>
                    <td>
                        <?php echo ": 085748352849" ?>
                    </td>
                </tr>
            </table></center>
            <p style="font-size:30px;">PENDIDIKAN</p>
            <table style="text-align: left; height: 130px;" >
                <tr>
                    <?php $sekolah = "MI ISLAMIYA PESEN";?>
                    <td><?php echo "$sekolah";?></td>
                </tr>
                <tr>
                <?php $sekolah = "SMP NEGERI 1 SUMBERREJO";?>
                    <td><?php echo "$sekolah";?></td>
                </tr>
                <tr>
                <?php $sekolah ="SMA NEGERI 1 BALEN";?>
                    <td> <?php echo "$sekolah";?></td>
                </tr>
                <tr>
                <?php $univ ="UNIVERSITAS PEMBANGUNAN NASIONAL 'VETERAN' JAWA TIMUR";?>
                    <td><?php echo "univ"?></td>
                </tr>
            </table>
        </div>
    </div>
   
    
    </body>
    </html>