<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use ZipArchive;

class PdfController extends Controller
{
    public function test (Request $req)
    {
      $data = [
        'name' => $req->query('name'),
        'age' => $req->age,
      ];
      $name = $req->query('name');
      $pdf = PDF::loadView('pdf.test', ['name' => $name]);
  
    // サーバーに保存(tempディレクトリに保存)
    \Storage::disk('local')->put('tempPdf/temp.pdf', $pdf->output());
    
      //Zip作成
      $zip = new ZipArchive();

      $result = $zip->open('temp/test.zip', ZipArchive::CREATE);
      if($result === true)
      {
        // 圧縮
        $zip->addFile('/storage/app/tempPdf/temp.pdf');

        // ファイルを生成
        $zip->close();
      }

    // 一時用を削除（ディレクトリごと）
    \Storage::disk('local')->deleteDirectory('tempPdf');

      // 表示させる場合
      return $pdf->stream('document.pdf');
  
      // ダウンロードさせる場合
    //   return $pdf->download('test.pdf');

    }
}
