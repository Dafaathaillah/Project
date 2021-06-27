<!DOCTYPE html>
<html>
<head>
  <title>Data Kendaraan</title>
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
    <h5>Data Kendaraan</h4>
    </center>
    <table id="customers" class='table table-bordered' style="width: 100%">
      <thead>
        <tr>
          <th>ID Barang</th>
          <th>Nomer Rangka</th>
          <th>Nomer Mesin</th>
          <th>Type</th>
          <th>Jenis</th>
          <th>Warna</th>
          <th>Tahun Pembuatan</th>
          <th>Tanggal Masuk</th>
          <th>Tanggal Keluar</th>
      </tr>
  @foreach ($data as $db)
      <tr>
          <td> {{ $db->id }} </td>
          <td> {{ $db->KendaraanMasuk->no_rangka }} </td>
          <td> {{ $db->KendaraanMasuk->no_mesin }} </td>
          <td> {{ $db->KendaraanMasuk->type }} </td>
          <td> {{ $db->KendaraanMasuk->jenis }} </td>
          <td> {{ $db->KendaraanMasuk->warna }} </td>
          <td> {{ $db->KendaraanMasuk->tahun_pembuatan }} </td>
          <td> {{ $db->KendaraanMasuk->tanggal_masuk }} </td>
          <td> {{ $db->tanggal_keluar }} </td>
      </tr>
  @endforeach
      </table>
      <p align="left"> Data From {{url('/')}}</p>
    </body>
    </html>