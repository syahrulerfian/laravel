<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Daftar Pekerja</center>
    <table border=2 align=center>
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Aksi</th>

                
            </tr>
        </thead>
        <tbody>
            @foreach($gaji as $pay)
            <tr>
                <td>{{$pay->nip}}</td>
                <td>{{$pay->nama}}</td>
                <td>{{$pay->jabatan}}</td>
                <td> <a href="/pay/{{$pay->id}}">Lihat</a></td>
            <tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

