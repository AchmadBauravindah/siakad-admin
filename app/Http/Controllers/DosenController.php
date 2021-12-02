<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDosenRequest;
use App\Http\Requests\UpdateDosenRequest;
use App\Models\Agama;
use App\Models\Dosen;
use App\Models\Program_studi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dosen.index');
    }
    public function indexAdmin()
    {
        // dd('asdkjaskjasd');
        $dosens = Dosen::all();
        return view('auth.admin.dosen.index', compact('dosens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $program_studis = Program_studi::all();
        $agamas = Agama::all();
        return view('auth.admin.dosen.create', compact('program_studis', 'agamas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDosenRequest $request)
    {
        $attr = $request->all();
        $attr['password'] = Hash::make($request->nim);

        Dosen::create($attr);

        session()->flash('success', 'Dosen telah ditambahkan');
        return redirect(route('admin.dosens.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function show(Dosen $dosen)
    {
        return view('auth.admin.dosen.show', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function edit(Dosen $dosen)
    {
        $program_studis = Program_studi::all();
        $agamas = Agama::all();
        return view('auth.admin.dosen.edit', compact('dosen', 'program_studis', 'agamas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDosenRequest $request, Dosen $dosen)
    {
        $attr = $request->all();
        $attr['nip'] = $dosen->nip;
        $attr['password'] = $dosen->password;

        $dosen->update($attr);

        session()->flash('success', 'Dosen telah diedit');
        return redirect(route('admin.dosens.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dosen $dosen)
    {
        $dosen->delete();

        session()->flash('success', 'Dosen berhasil dihapus');
        return redirect(route('admin.dosens.index'));
    }
}
