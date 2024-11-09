<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pivot Tabel Nilai Siswa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Pivot Tabel Nilai Siswa</h1>
        
        <table>
            <thead>
                <tr>
                    <th>Nama Siswa</th>
                    @foreach($pivotData->flatten(1)->unique('tahun_nilai')->pluck('tahun_nilai') as $tahun)
                        <th>Tahun {{ $tahun }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($pivotData as $siswaId => $data)
                    <tr>
                        <!-- Cek apakah siswa ada sebelum menampilkan nama -->
                        <td>{{ $data->first()->siswa ? $data->first()->siswa->nama : 'Tidak Ditemukan' }}</td>
                        @foreach($pivotData->flatten(1)->unique('tahun_nilai')->pluck('tahun_nilai') as $tahun)
                            @php
                                // Ambil nilai siswa berdasarkan tahun
                                $nilai = $data->firstWhere('tahun_nilai', $tahun)->nilai_siswa ?? 'Tidak Ada';
                            @endphp
                            <td>{{ $nilai }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
