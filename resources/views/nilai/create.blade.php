@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Nilai</div>

                <div class="card-body">
                    <form action="{{ route('simpan.nilai') }}" method="post">
                        @csrf
                        
                        <div class="form-group">        
                            <div class="form-row">

                                <label for="">Npm</label>
                                <select name="npm" id="npm" class='form-control'>
                                    <option value="" disabled selected>--pilih npm--</option>
                                    @foreach ($mahasiswa as $mhs)
                                         <option value="{{$mhs->id}}">{{$mhs->npm}}</option>                                     
                                    @endforeach
                                </select>

                                <label for="">Mahasiswa ID</label>
                                <select name="mahasiswa_id" id="mahasiswa_id" class='form-control'>
                                    <option value="" disabled selected>--pilih mahasiswa--</option>
                                    @foreach ($mahasiswa as $mhs)
                                         <option value="{{$mhs->id}}">{{$mhs->user->name}}</option>                                     
                                    @endforeach
                                </select>

                                <label for="">MAKUL ID</label>
                                <select name="makul_id" id="makul_id" class='form-control'>
                                    <option value="" disabled selected>--pilih matkul--</option>
                                    @foreach ($makul as $mk)
                                         <option value="{{$mk->id}}">{{$mk->nama_makul}}</option>                                     
                                    @endforeach
                                </select>

                                <label for="">SKS</label>
                               <select name="sks" id="sks" class='form-control'>
                                   <option value="" disabled selected>--pilih sks--</option>
                                   @foreach ($makul as $mk)
                                        <option value="{{$mk->id}}">{{$mk->sks}}</option>                                     
                                   @endforeach
                               </select>

                                <div class="col">
                                    <label for="">Nilai</label>
                                    <input type="number" name="nilai" class="form-control" placeholder="Tambahkan Nilai">
                                </div>
                                </div>
                        </div>
                    </div>

                        <div class="form-group">
                            <div class="form-row float-right">
                                <div class="col">
                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                    <a href="{{ Route('nilai') }}" class="btn btn-md btn-danger">BATAL</a>
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
