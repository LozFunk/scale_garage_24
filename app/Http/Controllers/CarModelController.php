<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use Illuminate\Http\Request;

class CarModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carModels = CarModel::with(['images', 'user', 'comments'])->latest()->paginate(6);
        return view('showroom.index', compact('carModels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'images.*' => 'required|image|max:20480',
        ]);
    
        $carModel = CarModel::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => '',
        ]);
    
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('models', 'public');
                $carModel->images()->create(['image_path' => $path]);
            }
        }
    
        return redirect()->route('car-models.show', $carModel)->with('success', 'Car model and images uploaded.');
    }

    /**
     * Display the specified resource.
     */
    public function show(CarModel $carModel)
    {
        $carModel->load('user', 'comments.user', 'images');
        return view('showroom.show', compact('carModel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarModel $carModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CarModel $carModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarModel $carModel)
{
    
    if ($carModel->user_id !== auth()->id()) {
        abort(403, 'Unauthorized action.');
    }

    $carModel->delete();

    return redirect()->route('car-models.index')->with('success', 'Car model deleted.');
}

}
