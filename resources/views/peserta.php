@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Halaman Data Peserta</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('fillParticipantData') }}">
                        @csrf

                        <input type="hidden" name="package_id" value="{{ $package->id }}">

                        <div class="form-group row">
                            <label for="participant_name" class="col-md-4 col-form-label text-md-right">Nama Peserta</label>

                            <div class="col-md-6">
                                <input id="participant_name" type="text" class="form-control @error('participant_name') is-invalid @enderror" name="participant_name" value="{{ old('participant_name') }}" required autocomplete="participant_name" autofocus>

                                @error('participant_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="participant_email" class="col-md-4 col-form-label text-md-right">E-Mail Peserta</label>

                            <div class="col-md-6">
                                <input id="participant_email" type="email" class="form-control @error('participant_email') is-invalid @enderror" name="participant_email" value="{{ old('participant_email') }}" required autocomplete="participant_email">

                                @error('participant_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="participant_phone_number" class="col-md-4 col-form-label text-md-right">No. Telepon Peserta</label>

                            <div class="col-md-6">
                                <input id="participant_phone_number" type="text" class="form-control @error('participant_phone_number') is-invalid @enderror" name="participant_phone_number" value="{{ old('participant_phone_number') }}" required autocomplete="participant_phone_number">

                                @error('participant_phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
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