@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Brand') }}</div>

                <div class="card-body">
                    <a href="{{route('lp_ruangan.create')}}"class="btn btn-primary">Add Data</a>

                    <table class="table caption-top">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">penanggung jawab</th>
                                <th scope="col">keterangan</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no =1;
                            @endphp
                            @foreach ( $lp_ruangan as $data )
                             <tr>
                                <th scope="row">{{$no++}}</th>
                                <td>{{$data->id_peminjaman}}</td>
                                <td>{{$data->keterangan}}</td>
                               <form action="{{route('lp_ruangan.destroy',$data->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <td>
                                   <a href="{{route('lp_ruangan.edit',$data->id)}}"><button type="button" class="btn btn-outline-success">Edit</button></a>
                                   <button type="submit" class="btn btn-outline-danger">Delete</button>
                                </td>
                                </form>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
