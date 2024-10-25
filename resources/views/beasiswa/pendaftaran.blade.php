@extends('main')

@section('content')
    <div class="p-5 d-flex flex-column justify-content-center align-items-center">
        <div class="fs-2 fw-bold">Daftar Beasiswa</div>
        <div class="w-75 card p-3">
            <div class="card-header">Formulir Pendaftaran</div>
            <form class="mt-3" action="{{ route('beasiswa.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                            name="nama" required>
                        @error('nama')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email" required>
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nomor_hp" class="col-sm-2 col-form-label">Nomor HP</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control @error('nomor_hp') is-invalid @enderror" id="nomor_hp"
                            name="nomor_hp" required>
                        @error('nomor_hp')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="semester" class="col-sm-2 col-form-label">Semester</label>
                    <div class="col-sm-10">
                        <select id="semester" name="semester" class="form-select" required>
                            <option value="1">Satu</option>
                            <option value="2">Dua</option>
                            <option value="3">Tiga</option>
                            <option value="4">Empat</option>
                            <option value="5">Lima</option>
                            <option value="6">Enam</option>
                            <option value="7">Tujuh</option>
                            <option value="8">Delapan</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ipk" class="col-sm-2 col-form-label">IPK</label>
                    <div class="col-sm-10">
                        <div class="bg-success-subtle py-2 px-3 text-success rounded-2">{{ $ipk }}</div>
                        <input type="hidden" class="form-control" readonly value={{ $ipk }} id="ipk"
                            name="ipk" required>
                    </div>
                </div>
                @if ($ipk < 3)
                    <div class="w-100 fw-semibold text-center bg-danger text-white rounded-3 p-2">Maaf Anda Tidak Bisa
                        Mendaftar</div>
                    <div class="text-center mt-1"><a href="/" class="text-center">klik untuk kembali</a></div>
                @else
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Jenis Beasiswa</label>
                        <div class="col-sm-10">
                            <select id="jenis_beasiswa" name="jenis_beasiswa" class="form-select" required>
                                @if ($jenis_beasiswa == 'Akademik')
                                    <option selected value="akademik">Akademik</option>
                                    <option value="non akademik">Non Akademik</option>
                                @else
                                    <option value="akademik">Akademik</option>
                                    <option selected value="non akademik">Non Akademik</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <input type="hidden" id="status" name="status" value="false">
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Foto IPK</label>
                        <div class="col-sm-10">
                            <input class="form-control @error('file') is-invalid @enderror" name="file" type="file"
                                id="file">
                            @error('file')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex">
                        <button type="submit" class="btn btn-primary me-2 w-50">Daftar</button>
                        <button onclick="{{ route('pilih') }}" class="btn btn-danger w-50">Batal</button>
                    </div>
                @endif
            </form>
        </div>
    </div>
@endsection
