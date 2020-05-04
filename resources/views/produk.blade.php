<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Form Input Produk</title>
</head>
<body>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <h1>Form Input Produk</h1>
                <hr>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif		
                <form action="{{url('/simpan-produk')}}" method="POST">	
                    @csrf				
                    <div class="form-group">
                        <label for="nim">Nama Produk</label>
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="{{ old('nama_produk') }}">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Kategori Produk</label>
                        <select class="form-control" name="kategori" id="kategori" value" {{ old('kategori') }}">
                            <option value="Elektronik">Elektronik</option>
                            <option value="Fashion">Fashion</option>
                            <option value="Komputer">Komputer</option>                   
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga" value="{{  old('harga') }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Stok</label>
                        <input type="text" class="form-control" id="stok" name="stok">
                    </div>
                    <div class="form-group">
                        <label>Kondisi Barang</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="kondisi" id="baru" 
                                    value="Y">
                                <label class="form-check-label" for="baru">Baru</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="kondisi" id="bekas"
                                    value="N">
                                <label class="form-check-label" for="bekas">Bekas</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Deskripsi Produk</label>
                        <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
