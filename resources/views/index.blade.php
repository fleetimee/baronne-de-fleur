<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Data Product</title>
</head>
<body>
    <div class="container mt-3">
        @if(session()->has('success'))
            <div class="alert alert-success my-5">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="py-4 d-flex justify-content-end align-items-center">
                    <h2 class="mr-auto">Tabel Product</h2>
                    <a href="{{url('/create-produk')}}" class="btn btn-primary">
                        Tambah Product
                     </a>
                    </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Product</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Kondisi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($produk as $p)
                        <tr>
                            <th>{{$loop->iteration}}</th>
                            <td>{{$p->nama_produk}}</td>
                            <td>{{$p->kategori}}</td>
                            <td>{{$p->harga}}</td>
                            <td>{{$p->stok}}</td>
                            <td>{{$p->kondisi == 'Y'?'Baru':'Bekas'}}</td>
                            <td><a href="{{ url('/show-produk/'.$p->id) }}" class="btn btn-primary">
                                Detail</a></td>
                        </tr>
                        @empty
                        <td colspan="6" class="text-center">Tidak ada data product</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
