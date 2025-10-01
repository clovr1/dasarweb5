<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Dosen</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            padding: 20px;
        }
        h2 {
            color: #333;
        }
        table {
            width: 50%; 
            border-collapse: collapse; 
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1); 
            background-color: #fff;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50; 
            color: white;
            width: 30%; 
        }
        tr:nth-child(even) {
            background-color: #f2f2f2; 
        }
        tr:hover {
            background-color: #ddd;
        }
        .label {
            font-weight: bold;
            color: #555;
        }
    </style>
</head>
<body>

    <h2>Informasi Dosen</h2>

    <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
        ];
    ?>

    <table>
        
        <tr>
            <th class="label">Nama</th>
            <td><?php echo $Dosen['nama']; ?></td>
        </tr>

        <tr>
            <th class="label">Domisili</th>
            <td><?php echo $Dosen['domisili']; ?></td>
        </tr>

        <tr>
            <th class="label">Jenis Kelamin</th>
            <td><?php echo $Dosen['jenis_kelamin']; ?></td>
        </tr>
        
    </table>
    </body>
</html>