@extends('adminlte::page')
<style>
.sidebar-dark-primary{
  background-color: #e61d1d !important;
}[class*="sidebar-dark-"] .sidebar a {
    color: 
    white !important;
}.nav-header{
    color: 
    white !important;
    font-weight: bold;
}
</style>
@section('title', '| Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@stop