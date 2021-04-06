<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ecp;
class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Template.dashboard');
    }

    public function dataecp()
    {
        return view('Halaman.data-ecp');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function cetakWord($id)
    {
        $wordTest = new \PhpOffice\PhpWord\PhpWord();
 
        // $newSection = $wordTest->addSection();
     
        // $desc1 = "The Portfolio details is a very useful feature of the web page. You can establish your archived details and the works to the entire web community. It was outlined to bring in extra clients, get you selected based on this details.";
     
        // $newSection->addText($desc1, array('name' => 'Tahoma', 'size' => 15, 'color' => 'red'));
     
        // $objectWriter = \PhpOffice\PhpWord\IOFactory::createWriter($wordTest, 'Word2007');
        // try {
        //     $objectWriter->save(storage_path('TestWordFile.pdf'));
        // } catch (Exception $e) {
        // }
        $ecp = Ecp::findOrFail($id);
        // dd($ecp);
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(storage_path('EcpForm.docx'));

        $templateProcessor->setValue('no_peralatan', '123');
        $templateProcessor->setValue('ecpno', $ecp->ecpno);
        $templateProcessor->setValue('deskripsi', $ecp->deskripsi);
        $templateProcessor->setValue('desktambahan', $ecp->desktambahan);
        $templateProcessor->setValue('alasan', $ecp->alasan);
        $templateProcessor->setValue('nama', $ecp->nama);
        $templateProcessor->setValue('alasan_spv', $ecp->alasan_spv);
        $templateProcessor->setValue('nama_spv', $ecp->nama_spv);

        $templateProcessor->saveAs('EcpForm1.docx');
        
        return response()->download(public_path('EcpForm1.docx'));
    }
}
