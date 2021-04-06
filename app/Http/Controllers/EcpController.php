<?php

namespace App\Http\Controllers;
use App\Models\Ecp;

use Illuminate\Http\Request;

class EcpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ecp = Ecp::all();
        return view('ECP.data-ecp', compact('ecp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('ECP.create-ecp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ecpno'=>'required',
            'nama'=>'required|',
            'deskripsi'=>'required',
            'desktambahan'=>'required',
            'alasan'=>'required'
            
        ]);

        
        Ecp::create($request->all());

        
        return redirect('/beranda')->with('success', 'Berhasil Mengajukan ECP !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ecp = Ecp::findOrFail($id);
        return view ('ECP.show-ecp', compact('ecp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ecp = Ecp::findOrFail($id);
        return view('ECP.edit-ecp', compact('ecp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'ecpno'=>'required',
            'nama'=>'required|',
            'deskripsi'=>'required',
            'desktambahan'=>'required',
            'alasan'=>'required'
            
        ]);

        $ecp = Ecp::findOrFail($id);
        $ecp->update($request->all());
        return redirect('data-ecp')->with('success', 'Data Berhasil Terupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peg = Ecp::findOrFail($id);
        $peg->delete();
        return back()->with('info', 'Data Berhasil Terhapus'); 
    }
}
