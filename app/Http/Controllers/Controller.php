<?php

namespace App\Http\Controllers;

use app\Models\Admin\Sesau\Voluntario\Instituicao;
use app\Exports\InstituicaoExport;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

class InstituicaoController extends Controller 
{
    public function index()
    {
        $instituicao = Instituicao::all();
    }

    public function downloadPDF()
    {
        $instituicao = Instituicao::all();

        $pdf = PDF::loadView("pdf.form", array('instituicao'=> $instituicao))
        ->setPaper('a4','portrait');

        return $pdf->download('instituicaoForm.pdf');
    }

    public function exportExcel()
    {
        return Excel::download(new InstituicaoExport, 'instituicao-data.xlsx');
    }
}
