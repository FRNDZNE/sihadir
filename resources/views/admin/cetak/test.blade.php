<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kop Surat</title>
    <style>
        * {
            font-family: "Times New Roman", Times, serif;
            font-size: 10pt;
            box-sizing: border-box;
        }

        .border-3 {
            border: 3px solid black;
            display: flex;
            margin-bottom: 5px;
            height: 65px;
        }

        img {
            width: 130px;
        }

        .text-center {
            text-align: center;
        }

        h6 {
            margin: 0;
        }

        .logo-kiri {
            width: 20%;
            float: left;
        }

        .kiri {
            width: 50%;
            float: left;
        }

        .kiri-bawah {
            width: 65%;
            float: left;
        }

        .logo-kanan {
            width: 20%;
            float: right;
            text-align: right;
        }

        .kanan {
            width: 50%;
            float: right;
            text-align: right;
        }

        .kanan-ttd {
            width: 35%;
            float: right;
        }

        .kop {
            width: 60%;
            float: left;
        }

        img {
            width: 65px;
        }
    </style>
</head>

<body>
    <div class="border-3">
        <div class="logo-kiri">
            <img src="{{ asset('images/LOGO POLNEP (PNG).png') }}" alt="Logo">
        </div>
        <div class="kop">
            <h6 class="text-center">REKAPITULASI ABSENSI PERKULIAHAN</h6>
            <h6 class="text-center">JURUSAN TEKNIK ELEKTRO</h6>
            <h6 class="text-center">PROGRAM STUDI D.III TEKNIK INFORMATIKA</h6>
            <h6 class="text-center">SEMESTER GENAP TAHUN AKADEMIK 2022/2023</h6>
        </div>
        <div class="logo-kanan">
            <img src="{{ asset('images/Logo Elektro Asli.png') }}" alt="Logo">
        </div>
    </div>
    <div style="padding-bottom: 5px; text-align:center;">
        <h6><u>SEMESTER IV / B</u></h6>
    </div>
    <div style="padding-bottom: 20px">
        <h6 class="kiri">MINGGU KE: 17</h6>
        <h6 class="kanan">Tanggal: 07 Agustus 2023 s/d 11 Agustus 2023</h6>
    </div>
    <table class="text-center" border="1" style="width:100%; margin-bottom:10px">
        <thead style="background-color:yellow;">
            <tr>
                <th rowspan="2">No.</th>
                <th rowspan="2">Nama Mahasiswa</th>
                <th rowspan="2">NIM</th>
                <th colspan="3">Jumlah</th>
                <th rowspan="1">Jumlah</th>
                <th rowspan="2">Status</th>
                <th rowspan="1">Kompensasi</th>
            </tr>
            <tr>
                <th>Alpha</th>
                <th>Izin</th>
                <th>Sakit</th>
                <th>A/I/S</th>
                <th style="background-color:red;">Jumlah</th>
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
                <td>-</td>
                <td>8</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Zidean Safwan Alfarozi</td>
                <td>3202116012</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Ridho Faturrahman</td>
                <td>3202116011</td>
                <td>8</td>
                <td>51</td>
                <td>151</td>
                <td>210</td>
                <td>-</td>
                <td>8</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Zidean Safwan Alfarozi</td>
                <td>3202116012</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Ridho Faturrahman</td>
                <td>3202116011</td>
                <td>8</td>
                <td>51</td>
                <td>151</td>
                <td>210</td>
                <td>-</td>
                <td>8</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Zidean Safwan Alfarozi</td>
                <td>3202116012</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Ridho Faturrahman</td>
                <td>3202116011</td>
                <td>8</td>
                <td>51</td>
                <td>151</td>
                <td>210</td>
                <td>-</td>
                <td>8</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Zidean Safwan Alfarozi</td>
                <td>3202116012</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Ridho Faturrahman</td>
                <td>3202116011</td>
                <td>8</td>
                <td>51</td>
                <td>151</td>
                <td>210</td>
                <td>-</td>
                <td>8</td>
            </tr>
            <tr>
                <td>10</td>
                <td>Zidean Safwan Alfarozi</td>
                <td>3202116012</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
            </tr>
            <tr>
                <td>11</td>
                <td>Ridho Faturrahman</td>
                <td>3202116011</td>
                <td>8</td>
                <td>51</td>
                <td>151</td>
                <td>210</td>
                <td>-</td>
                <td>8</td>
            </tr>
            <tr>
                <td>12</td>
                <td>Zidean Safwan Alfarozi</td>
                <td>3202116012</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
            </tr>
            <tr>
                <td>13</td>
                <td>Ridho Faturrahman</td>
                <td>3202116011</td>
                <td>8</td>
                <td>51</td>
                <td>151</td>
                <td>210</td>
                <td>-</td>
                <td>8</td>
            </tr>
            <tr>
                <td>14</td>
                <td>Zidean Safwan Alfarozi</td>
                <td>3202116012</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
            </tr>
            <tr>
                <td>15</td>
                <td>Ridho Faturrahman</td>
                <td>3202116011</td>
                <td>8</td>
                <td>51</td>
                <td>151</td>
                <td>210</td>
                <td>-</td>
                <td>8</td>
            </tr>
            <tr>
                <td>16</td>
                <td>Zidean Safwan Alfarozi</td>
                <td>3202116012</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
            </tr>
            <tr>
                <td>17</td>
                <td>Ridho Faturrahman</td>
                <td>3202116011</td>
                <td>8</td>
                <td>51</td>
                <td>151</td>
                <td>210</td>
                <td>-</td>
                <td>8</td>
            </tr>
            <tr>
                <td>18</td>
                <td>Zidean Safwan Alfarozi</td>
                <td>3202116012</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
            </tr>
            <tr>
                <td>19</td>
                <td>Ridho Faturrahman</td>
                <td>3202116011</td>
                <td>8</td>
                <td>51</td>
                <td>151</td>
                <td>210</td>
                <td>-</td>
                <td>8</td>
            </tr>
            <tr>
                <td>20</td>
                <td>Ridho Faturrahman</td>
                <td>3202116011</td>
                <td>8</td>
                <td>51</td>
                <td>151</td>
                <td>210</td>
                <td>-</td>
                <td>8</td>
            </tr>
            <tr>
                <td>21</td>
                <td>Ridho Faturrahman</td>
                <td>3202116011</td>
                <td>8</td>
                <td>51</td>
                <td>151</td>
                <td>210</td>
                <td>-</td>
                <td>8</td>
            </tr>
            <tr>
                <td>22</td>
                <td>Ridho Faturrahman</td>
                <td>3202116011</td>
                <td>8</td>
                <td>51</td>
                <td>151</td>
                <td>210</td>
                <td>-</td>
                <td>8</td>
            </tr>
            <tr>
                <td>23</td>
                <td>Ridho Faturrahman</td>
                <td>3202116011</td>
                <td>8</td>
                <td>51</td>
                <td>151</td>
                <td>210</td>
                <td>-</td>
                <td>8</td>
            </tr>
            <tr>
                <td>24</td>
                <td>Ridho Faturrahman</td>
                <td>3202116011</td>
                <td>8</td>
                <td>51</td>
                <td>151</td>
                <td>210</td>
                <td>-</td>
                <td>8</td>
            </tr>
            <tr>
                <td>25</td>
                <td>Ridho Faturrahman</td>
                <td>3202116011</td>
                <td>8</td>
                <td>51</td>
                <td>151</td>
                <td>210</td>
                <td>-</td>
                <td>8</td>
            </tr>
            <tr>
                <td>25</td>
                <td>Ridho Faturrahman</td>
                <td>3202116011</td>
                <td>8</td>
                <td>51</td>
                <td>151</td>
                <td>210</td>
                <td>-</td>
                <td>8</td>
            </tr>
            <tr>
                <td>25</td>
                <td>Ridho Faturrahman</td>
                <td>3202116011</td>
                <td>8</td>
                <td>51</td>
                <td>151</td>
                <td>210</td>
                <td>-</td>
                <td>8</td>
            </tr>
            <tr>
                <td>25</td>
                <td>Ridho Faturrahman</td>
                <td>3202116011</td>
                <td>8</td>
                <td>51</td>
                <td>151</td>
                <td>210</td>
                <td>-</td>
                <td>8</td>
            </tr>
            <tr>
                <td>25</td>
                <td>Ridho Faturrahman</td>
                <td>3202116011</td>
                <td>8</td>
                <td>51</td>
                <td>151</td>
                <td>210</td>
                <td>-</td>
                <td>8</td>
            </tr>
            <tr>
                <td>25</td>
                <td>Ridho Faturrahman</td>
                <td>3202116011</td>
                <td>8</td>
                <td>51</td>
                <td>151</td>
                <td>210</td>
                <td>-</td>
                <td>8</td>
            </tr>
        </tbody>
    </table>
    <table width="100%">
        <tr>
            <td rowspan="2" width="65%">
                <h6>Keterangan:</h6>
                <h6>16 - 31 Jam = SP 1</h6>
                <h6>32 - 37 Jam = SP 2</h6>
                <h6>38 - 45 Jam = SP 3</h6>
                <br>
                <table class="text-center" border="1">
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
            </td>
            <td rowspan="1" valign="top">
                <h6>Pontianak, 11 Agustus 2023</h6>
                <h6>Koordinator Teknik Informatika</h6>
            </td>
        <tr>
            <td valign="bottom">
                <h6>MARIANA SYAMSUDIN</h6>
                <h6>NIP. 197503142006042001</h6>
            </td>
        </tr>
        </tr>
    </table>
</body>

</html>
