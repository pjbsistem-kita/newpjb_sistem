<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spv;
use App\Models\Ecp;

class SpvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spv = Spv::all();
        return view('SPV.data-spv',compact('spv'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('SPV.create-spv');
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
            'ecpnomor'=>'required',
            'keputusan_spv'=>'required',
            'alasan_spv'=>'required',
            'nama_spv'=>'required'
        ]);
        Spv::create($request->all());
        return redirect('data-spv')->with('success', 'Berhasil Membuat Keputusan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $spv = Spv::findOrFail($id);
        return view ('SPV.show-spv', compact('spv'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $spv = Spv::findOrFail($id);
        return view('SPV.edit-spv',compact('spv'));
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
            'ecpnomor'=>'required',
            'keputusan_spv'=>'required',
            'alasan_spv'=>'required',
            'nama_spv'=>'required'
        ]);

        $spv = Spv::findOrFail($id);
        $spv->update($request->all());
        return redirect('data-spv')->with('success', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $spv = Spv::findOrFail($id);
        $spv->delete();
        return back()->with('info', 'Data Berhasil Terhapus'); 
    }

    public function cetakdoc($id)
    {
        $wordTest = new \PhpOffice\PhpWord\PhpWord();
 
        $ecp = Ecp::where('ecp.id',$id)->leftJoin('spv','ecp.ecpno','=','spv.ecpnomor')->first();
        // dd($ecp);
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(storage_path('EcpForm.docx'));

        $templateProcessor->setValue('no_peralatan', '123');
        $templateProcessor->setValue('ecpno', $ecp->ecpno);
        $templateProcessor->setValue('deskripsi', $ecp->deskripsi);
        $templateProcessor->setValue('desktambahan', $ecp->desktambahan);
        $templateProcessor->setValue('alasan', $ecp->alasan);
        $templateProcessor->setValue('nama', $ecp->nama);
        $templateProcessor->setValue('keputusan_spv', $ecp->keputusan_spv);
        $templateProcessor->setValue('alasan_spv', $ecp->alasan_spv);
        $templateProcessor->setValue('nama_spv', $ecp->nama_spv);

        $templateProcessor->saveAs('EcpForm1.docx');
        
        return response()->download(public_path('EcpForm1.docx'));
    }
}
