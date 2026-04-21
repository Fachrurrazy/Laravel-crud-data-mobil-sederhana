<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
</head>
<body>
    
    <nav>
        <div>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </div>
        <h1>selamat datang {{ $nama }}</h1>
        <table border="1" cellpadding="10" cellspacing="0" >
    <tr>
        <th>no</th>
        <th>merek</th>
        <th>tahun</th>
        <th>harga</th>
        <th>tahun</th>
        <th>warna</th>
        <th>aksi</th>
    </tr>
    @foreach($cars as $index => $car)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $car->merek }}</td>
        <td>{{ $car->no_plat }}</td>
        <td>{{ $car->harga }}</td>
        <td>{{ $car->tahun }}</td>
        <td>{{ $car->warna }}</td>
        <td>
                
                <a href="{{ route('edit', $car->id_car) }}">Edit</a> | 
                
                
                <form action="{{ route('delete', $car->id_car) }}" method="POST" style="display: inline;" 
                      onsubmit="return confirm('Yakin ingin menghapus data mobil {{ $car->merek }}?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="color: red; background: none; border: none; cursor: pointer;">
                        Delete
                    </button>
                </form>
            </td>
    </tr>
    @endforeach
</table>
<br><br>
<a href="/tambah">Tambah Mobil</a>
@if(session('success'))
<script>
    alert("{{ session('success') }}");
</script>
@endif
</body>
</html>