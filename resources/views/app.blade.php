<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('layouts.header_scripts')
        <title>KENDARAAN</title>
        
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                Laporan Penjualan
                            </a>
                        </ul>

                        <!-- Right Side Of Navbar -->
                    </div>
                </div>
            </nav>

            <main class="py-4">
                <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                    <div class="card">
                                <div class="card-header">Dashboard</div>
                                <div class="card-body">
                                
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4">
                    <div class="card">
                                <div class="card-header">Dashboard</div>
                                <div class="card-body">
                                
                                </div>
                            </div>
                    </div>
                    </div>
                </div>

                <div class="container mt-3">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">Dashboard</div>
                                <div class="card-body">
                                    <button class="btn btn btn-primary mr-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data</button>
                                    <button class="btn btn btn-primary">Jual</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-primary" href="{{route('tambah_motor')}}">Motor</a>
                        <a class="btn btn-primary" href="{{route('tambah_mobil')}}">Mobil</a>
                    </div>
                    </div>
                </div>
                </div>
            </main>
            
        </header>
        
    </body>
</html>