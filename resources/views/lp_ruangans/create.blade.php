@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ('Add Data Brand') }}</div>

                <div class="card-body">

                   <form action="{{route('pm_ruangan.store')}}" method="POST">
                     @csrf


                     <div class="mb-3">
                            <label class="form-label">penanggung jawab</label>
                            <select class="form-control" name="id_prminjaman" value="masukan penanggung jawab">
                                <option value=""></option>
                                 @foreach($ruangan as $ruangan)
                                    <option value="{{ $ruangan->id }}">{{ $ruangan->nama_ruangan }}</option>
                                @endforeach
                            </select>
                        </div>
                     <div class="mb-3">
                        <label class="form-label" >keterangan</label>
                        <input type="text" class="form-control" name="keterangan">
                    </div>

                    <button type="submit"class="btn btn-primary">save</button>
                   </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
