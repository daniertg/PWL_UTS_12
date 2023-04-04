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
 <div class="row">
 <div class="col-lg-12 margin-tb">
 <div class="pull-left mt-2">
 <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
 </div>
 <div class="float-right my-2">
 <a class="btn btnsuccess" href="{{ route('nasabah.create') }}"> Input Nasabah</a>
 </div>
 </div>
 </div>

 @if ($message = Session::get('success'))
 <div class="alert alert-success">
 <p>{{ $message }}</p>
 </div>
 @endif

 <table class="table table-bordered">
 <tr>
 <th>No Rekening</th>
 <th>Nama</th>
 <th>Alamat</th>
 <th>Jenis Tabungan</th>
 <th>Saldo</th>
 <th width="280px">Action</th>
 </tr>
 @foreach ($nasabah as $nasabah)
 <tr>

 <td>{{ $nasabah->no_rekening }}</td>
 <td>{{ $nasabah->nama }}</td>
 <td>{{ $nasabah->alamat }}</td>
 <td>{{ $nasabah->jenis_tabungan }}</td>
 <td>{{ $nasabah->saldo }}</td>

 <td>
 <form action="{{ route('nasabah.destroy',$nasabah->Nim) }}" method="POST">

 <a class="btn btninfo" href="{{ route('nasabah.show',$nahasiswa->no_rekening) }}">Show</a>
 <a class="btn btnprimary" href="{{ route('nasabah.edit',$nahasiswa->no_rekening) }}">Edit</a>
 @csrf
 @method('DELETE')
 <button type="submit" class="btn btn-danger">Delete</button>
 </form>
 </td>
 </tr>
 @endforeach
 </table>
 {{ $nasabah->links('pagination::simple-bootstrap-4') }}
</html>