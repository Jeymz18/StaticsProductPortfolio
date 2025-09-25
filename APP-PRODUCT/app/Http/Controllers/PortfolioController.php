<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolio = [
            'name' => 'PC EXPRESS',
            'title' => 'Click and Play, Win the day',
            'bio' => 'Welcome to PC Express, your trusted PC shop for high quality and performance driven computers. We provide custom built systems for gamers, professionals, and everyday users who need speed, reliability, and value. Since our start in 2000, we have focused on delivering powerful PCs and exceptional customer service.',
            'profile_image' => 'https://d3up48wss6lvj.cloudfront.net/data/uploads/2020/07/PCX_GAMING.jpg',
            'skills' => ['Laravel', 'PHP', 'JavaScript', 'HTML5', 'CSS3'],
        ];

        return view('portfolio.index', compact('portfolio'));
    }
}
