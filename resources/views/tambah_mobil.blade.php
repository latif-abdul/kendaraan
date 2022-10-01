@extends("layouts.default")
@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Mobil</div>
                <div class="card-body">
                <form method="POST" action="">

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Tahun Keluaran</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('tahun_keluaran') is-invalid @enderror" name="tahun_keluaran" value="{{ old('tahun_keluaran') }}" required autocomplete="tahun_keluaran" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Warna</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('warna') is-invalid @enderror" name="warna" value="{{ old('warna') }}" required autocomplete="warna" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Harga</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga') }}" required autocomplete="harga" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Mesin</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('mesin') is-invalid @enderror" name="mesin" value="{{ old('mesin') }}" required autocomplete="mesin" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Kapasitas Penumpang</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('kapasitas_penumpang') is-invalid @enderror" name="kapasitas_penumpang" value="{{ old('kapasitas_penumpang') }}" required autocomplete="kapasitas_penumpang" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Tipe</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('tipe') is-invalid @enderror" name="tipe" value="{{ old('tipe') }}" required autocomplete="tipe" autofocus>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection