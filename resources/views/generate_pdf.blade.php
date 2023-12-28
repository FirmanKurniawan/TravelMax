<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }
        .container {
            margin: 0 auto;
            width: 80%;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            padding: 20px 0;
            border-bottom: 2px solid #333;
        }
        .header h1 {
            margin-bottom: 0;
        }
        .header p {
            margin: 0;
        }
        .content {
            margin: 20px 0;
        }
        .content h2 {
            border-bottom: 1px solid #333;
            padding-bottom: 5px;
            margin-bottom: 20px;
        }
        .content p {
            margin: 10px 0;
        }
        .footer {
            text-align: center;
            padding: 20px 0;
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>PT. DUTA MITRA TOUR</h1>
            <p>Alamat Kantor: Ruko The Pavillion Blok A3, Jln. Raya Cilangkap, Cipayung, Jakarta Timur</p>
            <p>No. Hp Kantor: 021 - 84307052</p>
        </div>

        <div class="content">
            <h2>Data Diri</h2>
            <p><strong>User ID:</strong> {{ $registration->user_id }}</p>
            <p><strong>Nama:</strong> {{ $registration->nama }}</p>
            <p><strong>NIK:</strong> {{ $registration->nik }}</p>
            <p><strong>Tempat Lahir:</strong> {{ $registration->tempat_lahir }}</p>
            <p><strong>Tanggal Lahir:</strong> {{ $registration->tanggal_lahir }}</p>
            <p><strong>Alamat:</strong> {{ $registration->alamat }}</p>
            <p><strong>No Telepon:</strong> {{ $registration->no_telepon }}</p>
            <p><strong>Status Pernikahan:</strong> {{ $registration->status_pernikahan }}</p>
            <p><strong>No BPJS:</strong> {{ $registration->no_bpjs }}</p>
            <p><strong>No Paspor:</strong> {{ $registration->no_paspor }}</p>
            <p><strong>Tanggal Paspor Dikeluarkan:</strong> {{ $registration->tanggal_paspor_dikeluarkan }}</p>
            <p><strong>Asal Migrasi Paspor:</strong> {{ $registration->asal_migrasi_paspor }}</p>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2023 PT. DUTA MITRA TOUR. All rights reserved.</p>
    </div>
</body>
</html>
