@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data Mahasiswa</div>

                <div class="card-body">
                    <form action="{{ route('update.mahasiswa', $mahasiswa->id) }}" method="post" >
                        @csrf
                        
                        <div class="form-group">       
                            <div class="form-row">

                                <div class="col">
                                <label for="">NAMA MAHASISWA </label>
                                <select name="user_id" id="user_id" class="form-control">
                                    <option value="" disabled selected>---Pilih User---</option>
                                    @foreach ($user as $u)
                                    <option value="{{ $u->id}}" {{ $mahasiswa->user_id == $u->id ? 'selected' : ''}} >{{ $u->name }}</option>
                                    @endforeach
                                </select>
                                 </div>

                                <div class="col">
                                    <label for="">NPM</label>
                                    <input type="number" name="npm" class="form-control" placeholder="Tambahkan NPM" maxlength="8" value="{{ is_null
                                    ($mahasiswa) ? '' : $mahasiswa->npm }}">
                                 </div>

                                <div class="col">
                                    <label for="">TEMPAT LAHIR</label>
                                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Tambahkan Tempat Lahir" value="{{ is_null
                                        ($mahasiswa) ? '' : $mahasiswa->tempat_lahir }}">
                                </div>
                            </div>
                        </div>    

                        <div class="form-group">       
                            <div class="form-row">

                            <div class="col">
                                <label for="">TANGGAL LAHIR</label>
                                <input type="date" name="tgl_lahir" class="form-control" placeholder="Tambahkan Tanggal Lahir" value="{{ is_null
                                    ($mahasiswa) ? '' : $mahasiswa->tgl_lahir }}">
                            </div>

                            <div class="col">
                                <label for="">JENIS KELAMIN</label>
                               <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                   <option value="" disabled selected>---Pilih Jenis Kelamin---</option>
                                   <option value="L" {{ $mahasiswa->jenis_kelamin == 'L' ? 'selected' : ''}}>Laki-Laki</></option>
                                   <option value="P" {{ $mahasiswa->jenis_kelamin == 'P' ? 'selected' : ''}}>Perempuan </option>
                               </select>
                            </div>

                            <div class="col">
                                <label for="">TELEPON</label>
                                <input type="text" name="telepon" class="form-control" placeholder="Tambahkan Telepon" value="{{ is_null
                                    ($mahasiswa) ? '' : $mahasiswa->telepon }}">
                            </div>

                            </div>
                        </div>
                        
                            <div class="form-group">       
                            <div class="form-row">
                                <div class="col">
                                    <label for="">ALAMAT</label>
                                    <textarea name="alamat" id="alamat" cols="2" rows="3" class="form-control" style="resize: none">
                                        {{ is_null($mahasiswa) ? '' : $mahasiswa->alamat}}"
                                    </textarea>
                            </div>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row float-right">
                                <div class="col">
                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                    <a href="{{ Route('mahasiswa') }}" class="btn btn-md btn-danger">BATAL</a>
                                </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
