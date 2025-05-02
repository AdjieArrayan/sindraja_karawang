<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Kegiatan Satpol PP</title>
    <style>
        :root {
            --default-font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
            Ubuntu, "Helvetica Neue", Helvetica, Arial, "PingFang SC",
            "Hiragino Sans GB", "Microsoft Yahei UI", "Microsoft Yahei",
            "Source Han Sans CN", sans-serif;
        }
        .center {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table, th, td {
            border: 1.2px solid black;
        }

        td {
            padding: 8px;
            vertical-align: top;
        }

        .img-doc {
            margin-top: 10px;
            width: 100%;
            max-width: 600px;
        }
    </style>
</head>
<body>
    <div style="position: relative; text-align: center;">
        <!-- Logo di kiri absolut -->
        <img src="{{ public_path('style/assets/image/logo_img/logo_karawang.png') }}"
             alt="Logo Karawang"
             style="position: absolute; left: 0; top: 0; width: 120px;">

        <!-- Judul di tengah -->
        <div>
            <h2 style="margin: 0; font-size: 22px; line-height: 1.4;">
                PEMERINTAH KABUPATEN KARAWANG<br>
                SATUAN POLISI PAMONG PRAJA
            </h2>
            <p style="margin: 4px 0 0; font-size: 12px;">
                Jl. Jenderal Ahmad Yani No.70, Nagasari, Kec. Karawang Bar., Karawang, Jawa Barat 41314
            </p>
        </div>
    </div>

    <hr>

    <div class="center">
        <h2 style="font-size: 16px">SISTEM INFORMASI DIGITAL POLISI PAMONG PRAJA <br>
            KABUPATEN KARAWANG</h2> <br>
    </div>


        <table>
            <tr>
                <td>Nama Pelapor</td>
                <td>{{ $laporan->nama_pelapor }}</td>
            </tr>
            <tr>
                <td>Regu</td>
                <td>{{ $laporan->regu_pelapor }}</td>
            </tr>
            <tr>
                <td>Jenis Kegiatan</td>
                <td>{{ $laporan->jenis_kegiatan }}</td>
            </tr>
            <tr>
                <td>Tanggal Kegiatan</td>
                <td>{{ \Carbon\Carbon::parse($laporan->tanggal_kegiatan)->translatedFormat('l, d F Y') }}</td>
            </tr>
            <tr>
                <td>Waktu Kegiatan</td>
                <td>{{ $laporan->waktu_kegiatan }}</td>
            </tr>
            <tr>
                <td>Lokasi</td>
                <td>{{ $laporan->lokasi_kegiatan }}</td>
            </tr>
            <tr>
                <td>Anggota Terlibat</td>
                <td>{{ $laporan->anggota_terlibat }}</td>
            </tr>
            <tr>
                <td>Unsur Terlibat</td>
                <td>{{ $laporan->unsur_terlibat }}</td>
            </tr>
            <tr>
                <td>Laporan Singkat</td>
                <td>{{ $laporan->laporan_singkat }}</td>
            </tr>
            <tr>
                <td>Situasi Kondisi</td>
                <td>{{ $laporan->situasi_kondisi }}</td>
            </tr>
            <tr>
                <td>Catatan</td>
                <td>{{ $laporan->catatan_laporan }}</td>
            </tr>
            <tr>
                <td>Dokumentasi</td>
                <td>
                    @if ($laporan->dokumentasi_laporan)
                        <img src="{{ public_path('storage/' . $laporan->dokumentasi_laporan) }}" class="img-doc" alt="Dokumentasi Kegiatan">
                    @else
                        Tidak ada dokumentasi.
                    @endif
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
