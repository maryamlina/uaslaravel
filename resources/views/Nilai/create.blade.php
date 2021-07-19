@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">TAMBAHKAN DATA MATA KULIAH</div>

                <div class="card-body">
                    <form action="{{ route('simpan.nilai') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="col">
                                <label for="">MASUK ID</label>
                                <input type="text" name="makul_id" class="form-control">
                            </div>
                            <div class="col">
                                <label for="">NPM</label>
                                <input type="text" name="Npm" class="form-control">
                            </div>
                            <div class="col">
                                <label for="">Nama</label>
                                <input type="nama" name="name" class="form-control">
                            </div>
                            <div class="col">
                                <label for="">NAMA MATKUL</label>
                                <input type="text" name="nama_makul" class="form-control">
                            </div>
                            <div class="col">
                                <label for="">SKS</label>
                                <input type="number" name="sks" class="form-control">
                            </div>
                            <div class="col">
                                <label for="">NILAI</label>
                                <input type="number" name="nilai" class="form-control">
                            </div>
                            
                        </div>

                        <div class="form-group">
                            <div class="form-row float-right">
                                <div class="col">
                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                    <a href="{{ route('nilai') }}" class="btn btn-md btn-danger">BATAL</a>
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
