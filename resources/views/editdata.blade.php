<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input data Calon Siswa</title>
</head>
<body>
<h1 align="center"> Input Calon Siswa SMK Semangat 45</h1>
    <form action="{{url('registrasi/'.$data->id)}}" method="post">
        @method('PATCH')
        @csrf
        <div>
            <label>Nama Lengkap</label>
            <input type="text" name="nama" value="<?php echo $data['nama'] ?>">
        </div>
        <div>
            <label>Jenis Kelamin</label>
            <select name="jk"  value="<?php echo $data['jk'] ?>">
                <option value="Laki Laki" <?php if($data['jk'] == "Laki Laki"){echo "selected"; }  ?>>Laki Laki</option>
                <option value="Perempuan" <?php if($data['jk'] == "Perempuan"){echo "selected"; }  ?>>perempuan</option>
            </select>
        </div>
        <div>
            <label>Alamat</label>
            <input type="text" name="alamat"  value="<?php echo $data['alamat'] ?>">
        </div>
        <div>
            <label>Agama</label>
            <select name="agama"  value="<?php echo $data['agama'] ?>">
                <option value="islam" <?php if($data['agama'] == "islam"){echo "selected"; }  ?>>islam</option>
                <option value="kristen" <?php if($data['agama'] == "kristen"){echo "selected"; }  ?>>kristen</option>
            </select>
        </div>
        <div>
            <label>Asal SMP</label>
            <input type="text" name="asalsmp"  value="<?php echo $data['asalsmp'] ?>">
        </div>
        <div>
            <label>Jurusan</label>
            <select name="jurusan"  value="<?php echo $data['jurusan'] ?>">
                <option value="Rekayasa Perangkat Lunak" <?php if($data['jurusan'] == "Rekayasa Perangkat Lunak"){echo "selected"; }  ?>>Rekayasa Perangkat Lunak</option>
                <option value="Tata Boga" <?php if($data['jurusan'] == "Tata Boga"){echo "selected"; }  ?>>Tata Boga</option>
                <option value="Tata Busana" <?php if($data['jurusan'] == "Tata Busana"){echo "selected"; }  ?>>Tata Busana</option>
                <option value="Multimedia" <?php if($data['jurusan'] == "Multimedia"){echo "selected"; }  ?>>Multimedia</option>
            </select>
        </div>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>