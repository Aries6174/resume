<?php

namespace App\Controllers;

class Portfolio extends BaseController
{
    public function websites()
    {
        return view('portfolio/websites');
    }

    public function artworks()
    {
        return view('portfolio/artworks');
    }
}
