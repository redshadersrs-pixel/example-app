<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// 1. Overzichtspagina
Route::get('/planets', function (Request $request) {
    $planets = [
        ['name' => 'Mars', 'description' => 'Mars is the fourth planet from the Sun.'],
        ['name' => 'Venus', 'description' => 'Venus is the second planet from the Sun.'],
        ['name' => 'Earth', 'description' => 'Our home planet is the third planet from the Sun.'],
        ['name' => 'Jupiter', 'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface.'],
    ];

    $collection = collect($planets);

    if ($request->has('planeet')) {
        $search = $request->input('planeet');
        $collection = $collection->where('name', ucfirst(strtolower($search)));
    }

    return view('planets', ['planeten' => $collection->all()]);
});

// 2. Detailpagina
Route::get('/planets/{planet}', function ($planet) {
    $planets = [
        'mars' => ['name' => 'Mars', 'description' => 'Mars is the fourth planet from the Sun.'],
        'venus' => ['name' => 'Venus', 'description' => 'Venus is the second planet from the Sun.'],
        'earth' => ['name' => 'Earth', 'description' => 'Our home planet is the third planet from the Sun.'],
        'jupiter' => ['name' => 'Jupiter', 'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface.'],
    ];

    $key = strtolower($planet);

    if (!array_key_exists($key, $planets)) {
        abort(404);
    }

    return view('planet-detail', ['planet' => $planets[$key]]);
});
