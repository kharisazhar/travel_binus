@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Halaman Paket</div>

                <div class="card-body">
                    @if (count($packages) > 0)
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Paket</th>
                                    <th>Durasi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($packages as $package)
                                    <tr>
                                        <td>{{ $package->name }}</td>
                                        <td>{{ $package->duration }} hari</td>
                                        <td>
                                            <form action="{{ route('selectPackage') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="package_id" value="{{ $package->id }}">
                                                <button type="submit">Pilih</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>Belum ada paket tour yang tersedia.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection