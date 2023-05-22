<?php
namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        return view('about', [
            'title' => 'Halaman About',
            'content' => 'Ini adalah halaman yang menjelaskan tentang Satrio Pratama Wijaya.'
        ]);
    }
    public function artikel()
    {
        return view('artikel', [
            'title' => 'Halaman Artikel',
            'content' => 'Ini adalah halaman artikel yang menjelaskan tentang artikel-artikel Satrio Pratama Wijaya.'
        ]);
    }
    public function contact()
    {
        return view('contact', [
            'title' => 'Halaman Contact',
            'content' => 'Ini adalah halaman Contact yang menjelaskan tentang kontak Satrio Pratama Wijaya.'
        ]);
    }
    public function tos()
    {
        echo "ini halaman Term of Services";
    }
}