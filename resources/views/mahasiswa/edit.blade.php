@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">EDIT DATA MAHASISWA</div>
                <div class="card-body">
                    <form action="{{ route('update.mahasiswa', $mahasiswa->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="col">
                                <label for="">Id user</label>
                                <input type="text" name="user_id" class="form-control" placeholder="tambahkan id user" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->user_id }}">
                            </div>
                            <div class="col">
                                <label for="">NPM</label>
                                <input type="number" name="Npm" class="form-control" placeholder="tambahkan NPM" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->Npm }}">
                            </div>
                            <div class="col">
                                <label for="">TEMPAT LAHIR</label>
                                <input type="text" name="tempat_lahir" class="form-control" placeholder="tambahkan tempat lahir" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->tempat_lahir }}">
                            </div>
                            <div class="col">
                                <label for="">TANGGAL LAHIR</label>
                                <input type="text" name="tgl_lahir" class="form-control" placeholder="tambahkan tanggal lahir" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->tgl_lahir }}">
                            </div>
                            <div class="col">
                                <label for="">GENDER</label>
                                <input type="text" name="gender" class="form-control" placeholder="tambahkan gender" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->gender }}">
                            </div>
                            <div class="col">
                                <label for="">TELEPON</label>
                                <input type="text" name="telepon" class="form-control" placeholder="tambahkan telepon" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->telepon }}">
                            </div>
                            <div class="col">
                                <label for="">ALAMAT</label>
                                <input type="text" name="alamat" class="form-control" placeholder="tambahkan alamat" value="{{ is_null($mahasiswa) ? '' : $mahasiswa->alamat }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row float-right">
                                <div class="col">
                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                    <a href="{{ route('mahasiswa') }}" class="btn btn-md btn-danger">BATAL</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
