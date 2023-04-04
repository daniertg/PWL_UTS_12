@extends('mahasiswas.layout')

@section('content')

<div class="container mt-5">

 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Edit Mahasiswa
 </div>
 <div class="card-body">
 @if ($errors->any())
 <div class="alert alert-danger">
 <strong>Whoops!</strong> There were some problems with your input.<br><br>
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif
 <form method="post" action="{{ route('nasabah.update', $nasabah->no_rekening) }}" id="myForm">
 @csrf
 @method('PUT')
 <div class="form-group">
    <label for="no_rekening">No Rekening</label>
    <input type="text" name="no_rekening" class="formcontrol" id="no_rekening" value="{{ $nasabah->no_rekening }}"  >
    </div>
    <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" name="nama" class="formcontrol" id="nama" value="{{ $nasabah->nama }}" >
    </div>
    <div class="form-group">
    <label for="alamat">alamat</label>
    <input type="alamat" name="alamat" class="formcontrol" id="alamat" value="{{ $nasabah->alamat}}">
    </div>
    <div class="form-group">
    <label for="jenis_tabungan">Jenis Tabungan</label>
    <input type="jenis tabungan" name="jenis tabungan" class="formcontrol" id="jenis_tabungan" value= "{{$nasabah->jenis_tabungan}}" >
    </div>
    <div class="form-group">
    <label for="saldo">Saldo</label>
    <input type="saldo" name="sadlo" class="formcontrol" id="saldo" value="{{ $nasabah->saldo}}"  >
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </div>
    </div>
   </div>