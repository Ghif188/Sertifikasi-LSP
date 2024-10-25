@extends('main')

@section('content')
    <div class="bg-body-tertiary d-flex flex-column justify-content-center align-items-center py-3">
        <div class="w-75 card p-3">
            <table class="table table-dark table-striped">
                <div class="fs-2 fw-bold mb-3">
                    Riwayat Pendaftaran
                </div>
                <tbody>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Nomor</th>
                        <th>Semester</th>
                        <th>IPK</th>
                        <th>Jenis Beasiswa</th>
                        <th>File</th>
                        <th>Status</th>
                    </tr>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->email }}</td>
                            <td>0{{ $item->nomor_hp }}</td>
                            <td>{{ $item->semester }}</td>
                            <td>{{ $item->ipk }}</td>
                            <td>{{ $item->jenis_beasiswa }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $item->file) }}" style="width: 200px">
                            </td>
                            <td class="text-white">
                                @if ($item->status == 'true')
                                    <p class="bg-danger rounded-2 text-center fw-semibold ">
                                        Belum Disetujui
                                    </p>
                                @else
                                    <p class="bg-success rounded-2 text-center fw-semibold ">
                                        Sudah Disetujui
                                    </p>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
