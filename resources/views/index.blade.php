@extends('layout')

@section('header')
Home
@endsection

@section('header2')
Dashboard
@endsection

@section('header3')
Home
@endsection

@section('content')
<div class="card">
    <div class="card-header">
    <h3 class="card-title">Profil</h3>

    <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
        <i class="fas fa-times"></i>
        </button>
    </div>
    </div>
    <div class="card-body">
        <p>Nama : {{ $user->nama }}</p>
        <p>Email : {{ $user->email }}</p>
    </div>
    <!-- /.card-body -->
</div>
<div class="card">
    <div class="card-header">

    <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
        <i class="fas fa-times"></i>
        </button>
    </div>
    </div>
    <!-- /.card-body -->
</div>
@endsection