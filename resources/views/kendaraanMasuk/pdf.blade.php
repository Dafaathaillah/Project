<!DOCTYPE html>
<html>
<head>
  <title>Data Kendaraan Masuk</title>
</head>
<body>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #269abc;
  color: white;
}
</style>
  <center>
    <h5>Data Kendaraan Masuk</h4>
    </center>
    <table id="customers" class='table table-bordered' style="width: 100%">
      <thead>
         <tr>
                                    <th>ID Barang</th>
                                    <th>Gambar</th>
                                    <th>Nomer Rangka</th>
                                    <th>Nomer Mesin</th>
                                    <th>Type</th>
                                    <th>Jenis</th>
                                    <th>Warna</th>
                                    <th>Tahun Pembuatan</th>
                                    <th>Tanggal Masuk</th>
                                   
                                </tr>
                            @foreach ($data as $key => $km)
                                <tr>
                                    <td> {{ $key+1 }} </td>
                                    <td><img src="{{$km->gambar}}" style="width: 20%"></td>
                                    <td> {{ $km->no_rangka }} </td>
                                    <td> {{ $km->no_mesin }} </td>
                                    <td> {{ $km->type }} </td>
                                    <td> {{ $km->jenis }} </td>
                                    <td> {{ $km->warna }} </td>
                                    <td> {{ $km->tahun_pembuatan }} </td>
                                    <td> {{ $km->tanggal_masuk }} </td>
                                </tr>
                            @endforeach
      </table>
      <p align="left"> Data From {{url('/')}}</p>
    </body>
    </html>