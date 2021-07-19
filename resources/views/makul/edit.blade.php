@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">EDIT DATA MATA KULIAH</div>
                <div class="card-body">
                    <form action="{{ route('update.makul', $makul->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="col">
                                <label for="">KODE MATA KULIAH</label>
                                <input type="text" name="kd_makul" class="form-control" placeholder="tambahkan id user" value="{{ is_null($makul) ? '' : $makul->user_id }}">
                            </div>
                            <div class="col">
                                <label for="">NAMA MATA KULIAH</label>
                                <input type="text" name="nama_makul" class="form-control" placeholder="tambahkan NPM" value="{{ is_null($makul) ? '' : $makul->Npm }}">
                            </div>
                            <div class="col">
                                <label for="">SKS</label>
                                <input type="number" name="sks" class="form-control" placeholder="tambahkan tempat lahir" value="{{ is_null($makul) ? '' : $makul->tempat_lahir }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row float-right">
                                <div class="col">
                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                    <a href="{{ route('makul') }}" class="btn btn-md btn-danger">BATAL</a>
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
