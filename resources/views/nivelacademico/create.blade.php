@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Crear Cargos</h1>
    <form action="{{ url('/nivelacademic') }}" method="post" enctype="multipart/form-data">
    @csrf

    @include('nivelacademico.form')

</form>
</div>
@endsection
