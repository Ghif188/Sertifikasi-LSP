@extends('main')

@section('content')
    <div class="h-100 bg-body-tertiary d-flex flex-column justify-content-center align-items-center">
        <div class="fs-2 fw-bold">Pilih Beasiswa</div>
        <div class="w-50 card p-3">
            <div class="d-flex">
                <form action="{{ route('daftar') }}" method="GET" class="me-2 w-50">
                    <input type="hidden" name="jenis_beasiswa" value="Akademik">
                    <button type="submit" class="btn btn-primary w-100">Akademik</button>
                </form>
                <form action="{{ route('daftar') }}" method="GET" class="w-50">
                    <input type="hidden" name="jenis_beasiswa" value="Non Akademik">
                    <button type="submit" class="btn btn-danger w-100">Non Akademik</button>
                </form>
            </div>
        </div>
    </div>
@endsection
