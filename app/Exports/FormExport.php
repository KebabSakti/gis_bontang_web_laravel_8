<?php

namespace App\Exports;

use App\Models\Form;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\Exportable;

class FormExport implements FromView, ShouldAutoSize
{
    use Exportable;

    public function __construct(string $dateStart, string $dateEnd)
    {
        $this->dateStart = $dateStart;
        $this->dateEnd = $dateEnd;
    }

    public function view(): View
    {
        $start = Carbon::createFromFormat('d/m/Y', $this->dateStart, 'UTC')->format('Y-m-d');
        $end = Carbon::createFromFormat('d/m/Y', $this->dateEnd, 'UTC')->format('Y-m-d');

        $data = Form::whereDate('created_at', '>=', $start)
                    ->whereDate('created_at', '<=', $end)
                    ->get();

        return view('admin.formulir.export_excel', ['data' => $data]);
    }
}
