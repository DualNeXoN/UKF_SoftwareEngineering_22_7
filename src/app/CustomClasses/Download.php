<?php

namespace App\CustomClasses;

class Download
{
public function download(){
    $file = public_path() . "/report.docx";

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// .pdf -> application/pdf
//
// .doc -> application/msword
//
// .docx -> application/vnd.openxmlformats-officedocument.wordprocessingml.document
//
// .xls -> application/vnd.ms-excel
//
// .xlsx -> application/vnd.openxmlformats-officedocument.spreadsheetml.sheet
//
// .gif -> image/gif
//
// .png -> image/png
//
// .jpeg -> image/jpg
//
// .jpg -> image/jpg
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    $headers = array(
        'Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document',
    );
    return response()->download($file, 'report.docx', $headers);

}
}
