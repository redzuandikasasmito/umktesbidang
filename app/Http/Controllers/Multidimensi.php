<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Multidimensi extends Controller
{
    public function index()
    {
        // Array donut (dimensi 3)
        $donut = [
            'cake' => [
                'regular' => [
                    'glazed', 
                    'sugar'
                ],
                'chocolate' => [
                    'maple'
                ],
                'blueberry' => []
            ]
        ];

        // Array bar (dimensi 3)
        $bar = [
            'bar' => [
                'Bar' => [
                    'Regular' => [
                        'chocolate',
                        'maple'
                    ]
                ]
            ]
        ];

        // Menggabungkan kedua array (optional)
        $result = [
            'donut' => $donut,
            'bar' => $bar
        ];

        // Mengembalikan data dalam format JSON
        return response()->json($result);
    }
}
