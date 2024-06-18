<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use app\Models\Admin\Sesau\Voluntario\Instituicao;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpParser\ErrorHandler\Collecting;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;



class InstituicaoExport implements FromView
{
    use Exportable;
    private $instituicao;

    public function __construct(){
        $this->instituicao = Instituicao::All();
    }

    public function view() : View
    {
        return view('pdf.form',[
            'instituicao'=>$this->instituicao
        ]);
    }
}

