<?php

use App\Models\Education;
use App\Models\WorkExperience;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $education = Education::orderBy('end_date', 'desc')->get();
    $experience = WorkExperience::orderByRaw('case when end_date is null then 0 else 1 end, end_date desc')->get();
    return view('cv', compact(['education', 'experience']));
});


Route::get('download_cv', function(){
    $filePath = public_path('toufiqahmedakki_cv.pdf'); // or storage_path('app/public/sample.pdf') if stored in storage
    $fileName = 'toufiqahmedakki_cv.pdf';

    if (file_exists($filePath)) {
        return response()->download($filePath, $fileName);
    }

    // return abort(404, 'File not found.');

});