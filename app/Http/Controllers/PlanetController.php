<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanetController extends Controller
{
    private $planets = [
        'mars' => ['name' => 'Mars', 'description' => 'Mars is the fourth planet from the Sun. Known as the Red Planet.'],
        'venus' => ['name' => 'Venus', 'description' => 'Venus is the second planet from the Sun. The hottest planet.'],
        'earth' => ['name' => 'Earth', 'description' => 'Our home planet is the third planet from the Sun.'],
        'jupiter' => ['name' => 'Jupiter', 'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface.'],
    ];

    public function index(Request $request)
    {
        $collection = collect($this->planets);

        if ($request->has('planeet')) {
            $search = $request->input('planeet');
            $collection = $collection->where('name', ucfirst(strtolower($search)));
        }

        return view('planets', ['planeten' => $collection->all()]);
    }

    public function show($planet)
    {
        $key = strtolower($planet);

        if (!array_key_exists($key, $this->planets)) {
            abort(404);
        }

        return view('planet-detail', ['planet' => $this->planets[$key]]);
    }
}
