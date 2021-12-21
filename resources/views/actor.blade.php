<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Actor</title>
</head>
<body>
    <div class="container mt-5">
        <a href="/actors/add" class="btn btn-primary">Tambah</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Title</th>
                <th scope="col">Name</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($actor as $a)
                <tr>
                  <td>{{ $a['title'] }}</td>
                  <td>{{ $a['name'] }}</td>
                  <td>
                      <a href="/actors/{{ $a['id'] }}/edit" class="btn bg-success">Edit</a>
                      <a href="/actors/{{ $a['id'] }}" class="btn bg-danger">Hapus</a>
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
    </html>