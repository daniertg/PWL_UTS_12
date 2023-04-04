<html>
    <head>
        <title>Sistem Informasi Mahasiswa</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap
/4.4.1/css/bootstrap.min.css" integrity="sha384-
Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="an
onymous">
 <script src="https://code.jquery.com/jquery3.4.1.slim.min.js" integrity="sha384-
J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="an
onymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/poppe
r.min.js" integrity="sha384-
Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="an
onymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootst
rap.min.js" integrity="sha384-
wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="an
onymous"></script>
    </head>

<div class="container mt-5">

 <div class="row justify-content-center align-items-center">
 <div class="card" style="width: 24rem;">
 <div class="card-header">
 Tambah Nasabah
 </div>
 <div class="card-body">
 @if ($errors->any())
 <div class="alert alert-danger">
 <strong>Whoops!</strong> There were some problems with your i
nput.<br><br>
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
 @endif
 <form method="post" action="{{ route('nasabah.store') }}" id="myForm">
 @csrf
 <div class="form-group">
 <label for="no_rekening">No Rekening :</label>
 <input type="text" name="no_rekening" class="formcontrol" id="no_rekening"  >
 </div>
 <div class="form-group">
 <label for="nama">Nama</label>
 <input type="nama" name="nama" class="formcontrol" id="nama" >
 </div>
 <div class="form-group">
 <label for="alamat">Alamat</label>
 <input type="alamat" name="Kelas" class="formcontrol" id="alamat">
 </div>
 <div class="form-group">
 <label for="jenis_tabungan">Jenis Tabungan</label>
 <input type="jenis_tabungan" name="jenis_tabungan" class="formcontrol" id="jenis_tabungan">
 </div>
 <div class="form-group">
 <label for="saldo">Saldo</label>
 <input type="saldo" name="saldo" class="formcontrol" id="saldo">
 </div>
 <button type="submit" class="btn btn-primary">Submit</button>
 </form>
 </div>
 </div>
 </div>
 </div>
@endsection
</html>