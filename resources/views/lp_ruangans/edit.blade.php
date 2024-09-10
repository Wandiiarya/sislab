@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ('Edit Data Ruangan') }}</div>

                <div class="card-body">

                   <form  action="{{route('lp_ruangan.update',$pm_ruangan->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                            <label class="form-label">penanggung jawab</label>
                            <select class="form-control" name="id_reminjaman" value="{{$lp_ruangan->id_ruangan}}">
                              
                                @foreach($pm_ruangan as $pm_ruangan)
                                    <option value="{{ $pm_ruangan->id }}">{{ $pm_ruangan->nama_penanggungjawab }}</option>
                                @endforeach
                            </select>
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
