@extends("layouts.default")
@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Motor</div>
                <div class="card-body">
                <form method="POST" action="{{ $kendaraan['formAction'] }}">

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
                            <label for="name" class="col-md-4 col-form-label text-md-end">Tipe Suspensi</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('tipe_suspensi') is-invalid @enderror" name="tipe_suspensi" value="{{ old('tipe_suspensi') }}" required autocomplete="tipe_suspensi" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Tipe Transmisi</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('tipe_transmisi') is-invalid @enderror" name="tipe_transmisi" value="{{ old('tipe_transmisi') }}" required autocomplete="tipe_transmisi" autofocus>
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