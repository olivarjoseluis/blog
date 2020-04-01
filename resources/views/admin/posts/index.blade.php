@extends('admin.layout')
@section('content')
<div class="row text-center">
    <div class="col-12">
        <h1>Dashboard</h1>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Listado de Posts</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="posts-table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Resumen</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->titulo}}</td>
                            <td>{{$post->cuerpo_previo}}</td>
                            <td>
                                <a href="#" class="btn btn-xs btn-info"><i class="fas fa-pencil-alt"></i></a>
                                <a href="#" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>

@endsection