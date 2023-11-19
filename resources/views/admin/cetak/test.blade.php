<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kop Surat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    .border-3 {
        border-width:5px !important;
    }
    img {
        width: 130px !important;
    }
    table.table-bordered{
        border:3px solid black;
        margin-top:20px;
    }
    table.table-bordered > thead > tr > th{
        border:1px solid black;
        vertical-align: middle;
        font-size: 15px;
    }
    table.table-bordered > tbody > tr > td{
        border:1px solid black;
        font-size: 15px;
    }
    h6{
        font-size: 15px;
    }
    .flex{
        display: flex;
    }
    </style>
</head>
<body>
    <div class=" border border-3 border-dark">
        <div class="">
            <img src="images/WhatsApp Image 2023-11-19 at 21.13.29.jpeg" alt="Logo">
        </div>
        <div class="">
            <h6 class="text-center">REKAPITULASI ABSENSI PERKULIAHAN</h6>
            <h6 class="text-center">JURUSAN TEKNIK ELEKTRO</h6>
            <h6 class="text-center">PROGRAM STUDI D.III TEKNIK INFORMATIKA</h6>
            <h6 class="text-center">SEMESTER GENAP TAHUN AKADEMIK 2022/2023</h6>
        </div>
        <div class=" text-right">
            <img src="images/WhatsApp Image 2023-11-19 at 21.13.23.jpeg" alt="Logo">
        </div>
    </div>
    <div class="text-center p-5">
        <h6 class="font-weight-bold"><u>SEMESTER IV / B</u></h6>
    </div>
    <div class="flex">
        <h6 class="font-weight-bold">MINGGU KE: 17 <span class="text-right">Tanggal: 07 Agustus 2023 s/d 11 Agustus 2023</span></h6>
    </div>
    <table class="table table-bordered text-center" style="width:100%">
        <thead class="bg-warning">
        <tr>
            <th rowspan="2">No.</th>
            <th rowspan="2">Nama Mahasiswa</th>
            <th rowspan="2">NIM</th>
            <th colspan="3">Jumlah</th>
            <th rowspan="1">Jumlah</th>
        </tr>
        <tr>
            <th>Sakit</th>
            <th>Izin</th>
            <th>Alpha</th>
            <th>A/I/S</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Ridho Faturrahman</td>
                <td>3202116011</td>
                <td>8</td>
                <td>51</td>
                <td>151</td>
                <td>210</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Zidean Safwan Alfarozi</td>
                <td>3202116012</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
            </tr>
        </tbody>
    </table>
    <div class=" d-flex">
    <div class="">
        <h6>Keterangan:</h6>
        <h6>16 - 31 Jam = SP 1</h6>
        <h6>32 - 37 Jam = SP 2</h6>
        <h6>38 - 45 Jam = SP 3</h6>
    </div>
    <div class=" d-flex flex-column justify-content-center kanan">
        <h6>Pontianak, 11 Agustus 2023</h6>
        <h6>Koordinator Teknik Informatika</h6>
    </div>
    </div>
    <div class=" d-flex">
    <div class="">
        <table class="table table-bordered text-center" style="width:30%">
        <thead>
            <tr>
            <th>Lama Ketidakhadiran</th>
            <th>Kompensasi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Alpha <= 1 Jam</td>
                <td>5 X</td>
            </tr>
            <tr>
                <td>1 Jam < Alpha < 8 Jam</td>
                <td>8 Jam</td>
            </tr>
            <tr>
                <td>Alpha >= 8 Jam</td>
                <td>2 X</td>
            </tr>
        </tbody>
    </table>
    </div>
    <div class=" d-flex flex-column justify-content-center kanan2">
        <h6 class="font-weight-bold">MARIANA SYAMSUDIN</h6>
        <h6>NIP. 197503142006042001</h6>
    </div>
    </div>
</body>
</html>