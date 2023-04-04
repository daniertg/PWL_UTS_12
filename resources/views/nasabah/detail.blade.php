
<div class="container mt-5">
 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Detail Nasabah
 </div>
 <div class="card-body">
    <ul class="list-group list-group-flush">
    <li class="list-group-item"><b>No Rekening: </b>{{$nasabah->no_rekening}}</li>
    <li class="list-group-item"><b>Nama: </b>{{$nasabah->nama}}</li>
    <li class="list-group-item"><b>Kelas: </b>{{$nasabah->alamat}}</li>
    <li class="list-group-item"><b>Jurusan: </b>{{$nasabah->jenis_tabungan}}</li>
    <li class="list-group-item"><b>No Handphone: </b>{{$nasabah->saldo}}</li>
    </ul>
    </div>
    <a class="btn btn-success mt3" href="{{ route('nasabah.index') }}">Kembali</a>
    </div>
    </div>
   </div>
   