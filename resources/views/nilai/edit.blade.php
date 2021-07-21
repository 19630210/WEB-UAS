@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data Nilai</div>

                <div class="card-body">
                    <form action="{{ route('update.nilai', $nilai->id) }}" method="post" >
                        @csrf

                        <label for="">Npm</label>
                               <select name="npm" id="npm" class='form-control'>
                                   <option value="" disabled selected>--pilih npm--</option>
                                   @foreach ($mahasiswa as $mhs)
                                   <option value="{{$mhs->id}}" {{ $nilai->npm == $mhs->id ? 'selected' : '' }}>{{$mhs->npm}}</option>                                    
                                   @endforeach
                               </select>
                            
                               <label for="">Mahasiswa ID</label>
                               <select name="mahasiswa_id" id="mahasiswa_id" class='form-control'>
                                   <option value="" disabled selected>--pilih mahasiswa--</option>
                                   @foreach ($mahasiswa as $mhs)
                                        <option value="{{$mhs->id}}"  {{ $nilai->mahasiswa_id == $mhs->id ? 'selected' : '' }} >{{$mhs->user->name}}</option>                                     
                                   @endforeach
                               </select>

                               <label for="">MAKUL ID</label>
                               <select name="makul_id" id="makul_id" class='form-control'>
                                   <option value="" disabled selected>--pilih makul--</option>
                                   @foreach ($makul as $mk)
                                        <option value="{{$mk->id}}"  {{ $nilai->makul_id == $mk->id ? 'selected' : '' }}>{{$mk->nama_makul}}</option>                                     
                                   @endforeach
                               </select>

                               <label for="">SKS</label>
                               <select name="sks" id="sks" class='form-control'>
                                   <option value="" disabled selected>--pilih sks--</option>
                                   @foreach ($makul as $mk)
                                        <option value="{{$mk->id}}" >{{$mk->sks}}</option>                                     
                                   @endforeach
                               </select>
                               <label for="">Nilai</label>
                                    <input type="number" name="nilai" class="form-control" placeholder="Masukkan nilai" value='{{is_null($nilai) ? '': $nilai->nilai}}'>
                                    <br>
                                
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row float-right">
                                <div class="col">
                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                    <a href="{{ Route('nilai') }}" class="btn btn-md btn-danger">BATAL</a>
                                </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
