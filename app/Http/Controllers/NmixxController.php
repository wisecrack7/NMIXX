<?php
// app/Http/Controllers/NmixxController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NmixxController extends Controller
{
    public function index()
    {
        $members = [
            [
                'name' => 'Lily',
                'koreanName' => '릴리',
                'position' => ['Main Vocalist', 'Lead Dancer'],
                'birthdate' => 'October 17, 2002',
                'nationality' => '🇦🇺 Australia',
                'imageUrl' => 'https://images.unsplash.com/photo-1730328300093-f85a92502ea2?w=400',
                'color' => '#FF6B9D'
            ],
            [
                'name' => 'Haewon',
                'koreanName' => '해원',
                'position' => ['Leader', 'Main Vocalist'],
                'birthdate' => 'February 25, 2003',
                'nationality' => '🇰🇷 South Korea',
                'imageUrl' => 'https://images.unsplash.com/photo-1730328300093-f85a92502ea2?w=400',
                'color' => '#C4A1FF'
            ],
            [
                'name' => 'Sullyoon',
                'koreanName' => '설윤',
                'position' => ['Lead Vocalist', 'Visual'],
                'birthdate' => 'January 26, 2004',
                'nationality' => '🇰🇷 South Korea',
                'imageUrl' => 'https://images.unsplash.com/photo-1730328300093-f85a92502ea2?w=400',
                'color' => '#FFB5E8'
            ],
            [
                'name' => 'Bae',
                'koreanName' => '배이',
                'position' => ['Main Dancer', 'Sub Vocalist'],
                'birthdate' => 'December 28, 2004',
                'nationality' => '🇰🇷 South Korea',
                'imageUrl' => 'https://images.unsplash.com/photo-1730328300093-f85a92502ea2?w=400',
                'color' => '#AFF8DB'
            ],
            [
                'name' => 'Jiwoo',
                'koreanName' => '지우',
                'position' => ['Lead Dancer', 'Lead Rapper', 'Sub Vocalist'],
                'birthdate' => 'April 13, 2005',
                'nationality' => '🇰🇷 South Korea',
                'imageUrl' => 'https://images.unsplash.com/photo-1730328300093-f85a92502ea2?w=400',
                'color' => '#FFABAB'
            ],
            [
                'name' => 'Kyujin',
                'koreanName' => '규진',
                'position' => ['Main Dancer', 'Main Rapper', 'Sub Vocalist', 'Maknae'],
                'birthdate' => 'May 26, 2006',
                'nationality' => '🇰🇷 South Korea',
                'imageUrl' => 'https://images.unsplash.com/photo-1730328300093-f85a92502ea2?w=400',
                'color' => '#85E3FF'
            ]
        ];

        $albums = [
            [
                'title' => 'Ad Mare',
                'releaseDate' => 'February 22, 2022',
                'type' => 'Single Album',
                'tracks' => ['O.O', 'Tank'],
                'imageUrl' => 'https://images.unsplash.com/photo-1644855640845-ab57a047320e?w=400'
            ],
            [
                'title' => 'ENTWURF',
                'releaseDate' => 'September 19, 2022',
                'type' => 'Single Album',
                'tracks' => ['DICE', 'Cool (Your rainbow)', 'Tank (Street Ver.)'],
                'imageUrl' => 'https://images.unsplash.com/photo-1644855640845-ab57a047320e?w=400'
            ],
            [
                'title' => 'EXPÉRGO',
                'releaseDate' => 'March 20, 2023',
                'type' => 'EP',
                'tracks' => ['Young, Dumb, Stupid', 'Love Me Like This', 'Paxxword', 'Roller Coaster', 'Run For Roses', 'Just Did It'],
                'imageUrl' => 'https://images.unsplash.com/photo-1644855640845-ab57a047320e?w=400'
            ],
            [
                'title' => 'Fe3O4: STICK OUT',
                'releaseDate' => 'August 19, 2024',
                'type' => 'EP',
                'tracks' => ['DASH', 'See that?', 'SICKUHH (Ft. Kid Milli)', 'Red light sign, but we go', 'Passionfruit', 'Run For Roses (B-side Ver.)'],
                'imageUrl' => 'https://images.unsplash.com/photo-1644855640845-ab57a047320e?w=400'
            ]
        ];

        $achievements = [
            [
                'icon' => 'trophy',
                'title' => 'Rookie of the Year',
                'description' => 'Multiple rookie awards in 2022'
            ],
            [
                'icon' => 'music',
                'title' => 'Chart Success',
                'description' => 'Multiple entries on Billboard charts'
            ],
            [
                'icon' => 'star',
                'title' => 'Music Show Wins',
                'description' => 'Several music show trophies'
            ],
            [
                'icon' => 'sparkles',
                'title' => 'Global Recognition',
                'description' => 'Growing international fanbase'
            ]
        ];

        return view('nmixx', compact('members', 'albums', 'achievements'));
    }
}
