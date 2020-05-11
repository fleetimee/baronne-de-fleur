<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="pt-3">
                    <h1 class="h2 mr-auto">
                        Nama Product : {{ $produk->nama_produk }}
                    </h1>
                    <hr>
                    <ul>
                        <li>Kategori : {{ $produk->kategori }}</li>
                        <li>harga : {{ $produk->harga }}</li>
                        <li>Stok : {{ $produk->stok }}</li>
                        <li>Kondisi : 
                            {{ $produk->kondisi == 'Y' ? 'Baru' : 'Bekas' }}
                        </li>
                        <li>Deskripsi : {{ $produk->deskripsi }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>