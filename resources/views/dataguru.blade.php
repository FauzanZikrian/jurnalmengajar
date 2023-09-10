<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Guru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Data Guru</h1>
    <a type="button" class="btn btn-primary" href="/tambahguru">+Tambah Guru</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Kode Guru</th>
        <th scope="col">Nama Guru</th>
        <th scope="col">Mapel</th>
        <th scope="colspan=2">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @php
            $no =1;
        @endphp
        @foreach ( $data as $row )
        <tr>
            <th scope="row">{{ $no++ }}</th>
            <td>{{ $row->kodeGuru }}</td>
            <td>{{ $row->namaGuru }}</td>
            <td>{{ $row->mapel }}</td>
            <td>
                <a href="/tampilguru/{{ $row->id }}" type="button" class="btn btn-warning"><b>Ubah</b></a>
                <a href="/hapus/{{ $row->id }}" type="button" class="btn btn-danger"><b>Hapus</b></a>
              </td>
          </tr>

        @endforeach
    </tbody>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>