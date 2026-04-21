<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mobil</title>
</head>
<body>
    <h2>Edit Data Mobil</h2>
    
    <form action="{{ route('update', $car->id_car) }}" method="POST">
        @csrf
        @method('PUT')
        
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
        <input type="text" id="merek" name="merek" value="{{ old('merek', $car->merek) }}" required><br><br>

        <label for="warna">Warna:</label>
        <input type="text" id="warna" name="warna" value="{{ old('warna', $car->warna) }}" required><br><br>

        <label for="tahun">Tahun:</label>
        <input type="number" id="tahun" name="tahun" value="{{ old('tahun', $car->tahun) }}" required><br><br>

        <label for="harga">Harga:</label>
        <input type="number" id="harga" name="harga" value="{{ old('harga', $car->harga) }}" required><br><br>

        <label for="no_plat">No Plat:</label>
        <input type="text" id="no_plat" name="no_plat" value="{{ old('no_plat', $car->no_plat) }}" required><br><br>

        <button type="submit">Update</button>
        <a href="{{ route('home') }}">Kembali</a>
    </form>
</body>
</html>