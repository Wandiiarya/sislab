@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ('Edit Data Ruangan') }}</div>

                <div class="card-body">

                   <form  action="{{route('pm_ruangan.update',$pm_ruangan->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label" >Penanggung jawab</label>
                        <input type="text" class="form-control" name="penanggungjawab" value="{{$pm_ruangan->penanggungjawab}}" >
                    </div>
                     <div class="mb-3">
                        <label class="form-label" >instansi</label>
                        <input type="text" class="form-control" name="instansi" value="{{$pm_ruangan->instansi}}" >
                    </div>
                     <div class="mb-3">
                        <label class="form-label" >Jenis kegiatan</label>
                        <input type="text" class="form-control" name="jenis_kegiatan" value="{{$pm_ruangan->jenis_kegiatan}}" >
                    </div>
                    <div class="mb-3">
                            <label class="form-label">Nama Ruangan</label>
                            <select class="form-control" name="id_ruangan" value="{{$pm_ruangan->id_ruangan}}">
                              
                                @foreach($ruangan as $ruangan)
                                    <option value="{{ $ruangan->id }}">{{ $ruangan->nama_ruangan }}</option>
                                @endforeach
                            </select>
                        </div>
                    <div class="mb-3">
                        <label class="form-label" >Tanggal peminjaman</label>
                        <input type="date" class="form-control" name="tanggal_peminjaman" value="{{$pm_ruangan->tanggal_peminjaman}}" >
                    </div>
                     <div class="mb-3">
                        <label class="form-label" >Documentasi</label>
                        <input type="file" class="form-control" name="documentasi" value="{{$pm_ruangan->documentasi}}" >
                    </div>
                     <div class="mb-3">
                        <label class="form-label" >Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" value="{{$pm_ruangan->keterangan}}" >
                    </div>
                     <button type="submit"class="btn btn-primary">Edit</button>
                   </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
