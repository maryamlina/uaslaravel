@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">TAMBAHKAN DATA MAHASISWA</div>

                <div class="card-body">
                    <form action="{{ route('simpan.mahasiswa') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="col">
                            <label for="">Nama Mahasiswa</label>
                                <select name="user_id" id="user_id" class="form-control">
                                    <option value="" disabled selected>---pilih user--</option>
                                    @foreach ($user ad $u)
                                          <option value="{{ $u->id }}" >{{ $u->name }}</option>
                                    @endforeach
                                </select>
                                <label for="">Id user</label>
                                <input type="text" name="user_id" class="form-control" placeholder="tambahkan id user">
                            </div>
                            <div class="col">
                                <label for="">NPM</label>
                                <input type="number" name="Npm" class="form-control" placeholder="tambahkan id user">
                            </div>
                            <div class="col">
                                <label for="">TEMPAT LAHIR</label>
                                <input type="text" name="tempat_lahir" class="form-control" placeholder="tambahkan id user">
                            </div>
                            <div class="col">
                                <label for="">TANGGAL LAHIR</label>
                                <input type="date" name="tgl_lahir" class="form-control" placeholder="tambahkan id user">
                            </div>
                            <div class="col">
                                <label for="">GENDER</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="" disabled selected>---pilih jenis kelamin--</option>
                                    <option value="L" >Laki-laki</option>
                                    <option value="P" >Perempuan</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="">TELEPON</label>
                                <input type="number" name="telepon" class="form-control" placeholder="tambahkan id user">
                            </div>
                            <div class="col">
                                <label for="">ALAMAT</label>
                                <input type="text" name="alamat" class="form-control" placeholder="tambahkan id user">
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
