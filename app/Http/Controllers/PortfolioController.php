<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'id' => 1,
                'title' => 'E-Commerce Platform',
                'description' => 'Full-stack e-commerce solution with payment integration',
                'image' => '/images/project-1.png',
                'tags' => ['Laravel', 'Vue.js', 'MySQL'],
                'link' => 'https://toko-kue-kharismaa.infinityfreeapp.com/?i=1'
            ],
        ];

        $skills = [
            ['name' => 'Laravel', 'level' => 50],
            ['name' => 'PHP', 'level' => 50],
            ['name' => 'Tailwind CSS', 'level' => 30],
            ['name' => 'MySQL', 'level' => 45],
            ['name' => 'Git', 'level' => 35],
        ];

        return view('portfolio.index', compact('projects', 'skills'));
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Di sini bisa ditambahkan logic untuk menyimpan ke database atau kirim email
        // Untuk sekarang kita return success response
        
        return response()->json([
            'success' => true,
            'message' => 'Terima kasih! Pesan Anda telah diterima.'
        ]);
    }
}
