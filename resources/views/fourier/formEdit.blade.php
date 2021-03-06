@extends('layouts.main')

@section('title', 'Edit Member')

@section('content')
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Update data anggota</h6>
            </div>
            <div class="card-body">
                <form class="user" action="{{ route('fourier.update', $anggota->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">

                        <div class="col-lg-1"></div>

                        <div class="col">

                            <div class="form-group">
                                <h6>Data Anggota</h6>
                            </div>

                            <div class="form-group">
                                <input name="name" type="text" class="form-control form-control-user{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ $anggota->name ? $anggota->name : old('name') }}" placeholder="Nama Lengkap">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <input name="pangkat" type="text" class="form-control form-control-user{{ $errors->has('pangkat') ? ' is-invalid' : '' }}" value="{{ $anggota->pangkat ? $anggota->pangkat : old('pangkat') }}" placeholder="Pangkat">
                                @if ($errors->has('pangkat'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('pangkat') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <input name="nrp" type="text" class="form-control form-control-user{{ $errors->has('nrp') ? ' is-invalid' : '' }}" value="{{ $anggota->nrp ? $anggota->nrp : old('nrp') }}" placeholder="N R P">
                                @if ($errors->has('nrp'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nrp') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>

                        <div class="col">

                            <div class="form-group">
                                <h6>Data Weapon</h6>
                            </div>

                            <div class="form-group">
                                <input name="type" type="text" class="form-control form-control-user{{ $errors->has('type') ? ' is-invalid' : '' }}" value="{{ $anggota->senjata->type ? $anggota->senjata->type : old('type') }}" placeholder="Type - ext: SS1-V1 / M16">
                                @if ($errors->has('type'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <input name="nosenjata" type="text" class="form-control form-control-user{{ $errors->has('nosenjata') ? ' is-invalid' : '' }}" value="{{ $anggota->senjata->nosenjata ? $anggota->senjata->nosenjata : old('nosenjata') }}" placeholder="Nomor Senjata">
                                @if ($errors->has('nosenjata'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nosenjata') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>

                        <div class="col-lg-1"></div>

                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col">
                                <a href="{{ route('fourier.index') }}" class="btn btn-block btn-user btn-danger">{{ __('Cancel') }}</a>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-block btn-user btn-primary">{{ __('Update Data') }}</button>
                            </div>
                            <div class="col-lg-1"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection