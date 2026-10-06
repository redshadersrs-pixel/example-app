<?php

use Illuminate\Support\Facades\Route;

Route::get('/planets', function () {
    $planets = [
        [
            'name' => 'Mars',
            'description' => 'Mars is the fourth planet from the Sun.'
        ],
        [
            'name' => 'Venus',
            'description' => 'Venus is the second planet from the Sun.'
        ],
        [
            'name' => 'Earth',
            'description' => 'Our home planet is the third planet from the Sun.'
        ],
        [
            'name' => 'Jupiter',
            'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface.'
        ],
    ];

    // Maak een Laravel Collection van de array
    $collection = collect($planets);

    // Controleer of de GET-parameter 'planeet' aanwezig is in de URL
    if (request()->has('planeet')) {
        $search = request('planeet');
        // Filter de collectie met de where() methode
        $collection = $collection->where('name', ucfirst(strtolower($search)));
    }

    return view('planets', ['planeten' => $collection->all()]);
});
