<?php

namespace App\Http\Controllers;
use App\Models\nasabah;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if($request->has('Nama')){
            $Nama = request('Nama');
            $nasabah = nasabah::where('Nama', 'LIKE', '%'.$Nama.'%')->paginate(6);
            return view('nasabah.index', compact('nasabah'));
        }
        else {
            $nasabah = nasabah::orderBy('no_rekening', 'desc')->paginate(5);
        return view('nasabah.index', compact('nasabah'))->with('i', (request()->input('page', 1) -1) *6);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('nasabah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'jenis_tabungan' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_tabugan' => 'required',
            'saldo' => 'required',
        ]);

        nasabah::create($request->all());

        return redirect()->route('nasabah.index')->with('success', ' Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($no_rekening)
    {
        //
        $nasabah = nasabah::find($no_rekening);
        return view('nasabah.detail', compact('nasabah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($no_rekening)
    {
        //
        $nasabah = nasabah::find($no_rekening);
        return view('nasabah.edit', compact('nasabah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $no_rekening)
    {
        //
        $request->validate([
            'jenis_tabungan' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_tabugan' => 'required',
            'saldo' => 'required',
        ]);

        nasabah::find($no_rekening)->update($request->all());

        return redirect()->route('nasabah.index')->with('success', ' Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($no_rekening)
    {
        //
        nasabah::find($no_rekening)->delete();
        return redirect()->route('nasabah.index')->with('success','Nasabah berhasil di hapus');
    }
}
