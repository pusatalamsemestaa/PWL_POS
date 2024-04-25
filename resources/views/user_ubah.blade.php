<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Ubah Data User<</title>
    </head>
    <body>
        <h1>Form Ubah Data User</h1>
        <br>
        <form method="post" action="{{ route('/user/ubah_simpan', $data->user_id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <label>Username</label>
            <input type="text" name="username" value="{{ $data->username }}">
            <br>

            <label>Nama</label>
            <input type="text" name="nama" value="{{ $data->nama }}">
            <br>

            <label>ID Level</label>
            <input type="number" name="level_id" value="{{ $data->level_id }}">
            <br>

            <input type="submit" name="btn btn-success" value="Ubah">
        </form>
    </body>
</html>