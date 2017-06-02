@extends('admin.template.main')
@section('title') 
    welcome
@endsection
@section('content')
@include('admin.template.partials.nav')
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 alert-success">col-xs-12 col-sm-12 col-md-12</div>
</div>
<br>
<div class="row">
  <div class="col-xs-11 col-sm-11 col-md-11 alert-success">col-xs-11 col-sm-11 col-md-11</div>
</div>
<br>
<div class="row">
  <div class="col-xs-10 col-sm-10 col-md-10 alert-success">col-xs-10 col-sm-10 col-md-10</div>
</div>
<h1 class="text-danger">Bienvenido parcer@</h1>

<a class="btn btn-primary">Hola this is a button<a/>
@endsection
