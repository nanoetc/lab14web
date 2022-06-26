<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class Page extends BaseController
{
  public function about()
  {
    return view('about', [
      'title' => 'halaman about',
      'content' => 'ini adalah halaman about yang menjelaskan tentang isi halaman ini'
    ]);
  }
  public function contact()
  {
    echo "Ini halaman Contact";
  }



  public function tos()
  {
    echo "Ini halaman Term of Services";
  }
}

?>
