@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Registrar Profesiones </h1>
    <form action="{{ url('/profession') }}" method="post" enctype="multipart/form-data">
    @csrf

    @include('profession.form')

</form>
</div>
@endsection
