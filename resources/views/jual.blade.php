@extends("layouts.default")
@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Jual</div>
                <div class="card-body">
                    <form method="POST" action="">

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Kendaraan</label>

                            <div class="col-md-6">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih kendaraan</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
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