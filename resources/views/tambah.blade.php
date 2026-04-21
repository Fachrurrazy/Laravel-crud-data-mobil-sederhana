<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data</title>
</head>
<body>
    <h2>masukan data baru</h2>
    <form action="{{ route('tambah.store') }}" method="POST">
    @csrf
    
  
    @if ($errors->any())
        <div style="color: red; margin-bottom: 10px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <label for="merek">Merek:</label>
    <input type="text" id="merek" name="merek" value="{{ old('merek') }}"><br><br>

    <label for="warna">Warna:</label>
    <input type="text" id="warna" name="warna" value="{{ old('warna') }}"><br><br>

    <label for="tahun">Tahun:</label>
    <input type="text" id="tahun" name="tahun" value="{{ old('tahun') }}"><br><br>

    <label for="harga">Harga:</label>
    <input type="text" id="harga" name="harga" value="{{ old('harga') }}"><br><br>

    <label for="no_plat">no_plat:</label>
    <input type="text" id="no_plat" name="no_plat" value="{{ old('no_plat') }}"><br><br>

    <input type="submit" value="Submit">
</form>
<br><br>
 <a href="/">kembali</a>
            
</body>
</html>