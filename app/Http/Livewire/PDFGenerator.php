<?php

namespace App\Http\Livewire;

use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;
use Dompdf\Dompdf;
use Illuminate\View\View;

class PDFGenerator extends Component
{
    public $userCategory;

    public function render(): View
    {
        $this->userCategory = User::with(['category' => function ($q) {
            $q->where('user_categories.is_approved', true);
        }])->whereHas('category', function ($q) {
            $q->whereBetween('user_categories.created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()]);
        })->get();

        $pdf = new Dompdf();
        $pdf->loadHtml(view('layouts.pdf', [
            'userCategories' => $this->userCategory,
            'startMonth' =>  Carbon::now()->startOfMonth()->format('d M Y'),
            'endMonth' => Carbon::now()->endOfMonth()->format('d M Y')
        ]));
        $pdf->render();
        $pdf->stream('report' . Carbon::now()->startOfMonth()->format('d-M-Y') . '-sampai-' . Carbon::now()->endOfMonth()->format('d-M-Y') . '.pdf');

        return view('layouts.pdf', [
            'userCategories' => $this->userCategory,
            'startMonth' =>  Carbon::now()->startOfMonth()->format('d M Y'),
            'endMonth' => Carbon::now()->endOfMonth()->format('d M Y')
        ]);
    }
}
