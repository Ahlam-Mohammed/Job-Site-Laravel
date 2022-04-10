<?php

namespace App\Http\Controllers\seeker;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;

class CvController extends Controller
{
    public function showCV($id)
    {
        $user = User::find($id);
        return view('web.seeker.cv', compact('user'));
    }

    public function downloadPDF($id)
    {
        $user = User::find($id);
        $data = ['user' => $user];
//        // share data to view
//        view()->share('user',$user);
//
//        $pdf = PDF::loadView('web.seeker.cv', $data);

        // download PDF file with download method
//        return $pdf->download('cv.pdf');

        $pdf = App::make('dompdf.wrapper');
        $job_title = $user->about->job_title;
        $pdf->loadHTML("
            <div>
                <h1> $user->full_name</h1>
                <h3>$job_title </h3>
            </div>

          ");
        return $pdf->stream();
    }
}
