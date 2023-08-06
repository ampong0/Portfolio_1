<?php
namespace App\Http\Controllers;





class CvController extends Controller
{
    public function showPdf()
    {
        // Replace the file path with the correct path to your PDF file
        $filePath = 'c:\Users\reuben\Desktop\Cv\resume.pdf';

        if (file_exists($filePath)) {
            return response()->streamDownload(function () use ($filePath) {
                readfile($filePath);
            }, 'resume.pdf', ['Content-Type' => 'application/pdf']);
        } else {
            abort(404, 'The file does not exist.');
        }
    }
}


