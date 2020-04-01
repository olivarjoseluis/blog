@extends('admin.layout')
@section('content')
<div class="row text-center">
<div class="col-12">
    <h1>Dashboard</h1>
</div>
</div>

<p>Usuario: {{auth()->user()->name}}</p>
<p>Usuario: {{auth()->user()->email}}</p>

@endsection