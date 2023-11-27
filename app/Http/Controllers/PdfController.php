<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function test (Request $req)
    {
      $data = [
        'name' => $req->name,
        'age' => $req->age,
      ];
      $pdf = PDF::loadView('pdf.test', $data);
  
    // サーバーに保存(tempディレクトリに保存)
    $pdf->Output("app/data/MyPDF.pdf", "F");

      // 表示させる場合
      return $pdf->stream('document.pdf');
  
      // ダウンロードさせる場合
    //   return $pdf->download('test.pdf');

    }
}
