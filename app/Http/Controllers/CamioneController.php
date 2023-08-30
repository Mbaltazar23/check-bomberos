<?php

namespace App\Http\Controllers;

use App\Models\Camione;
use Illuminate\Http\Request;

/**
 * Class CamioneController
 * @package App\Http\Controllers
 */
class CamioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $camiones = Camione::paginate();

        return view('camione.index', compact('camiones'))
            ->with('i', (request()->input('page', 1) - 1) * $camiones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $camione = new Camione();
        return view('camione.create', compact('camione'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Camione::$rules);

        $camione = Camione::create($request->all());

        return redirect()->route('camiones.index')
            ->with('success', 'Camione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $camione = Camione::find($id);

        return view('camione.show', compact('camione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $camione = Camione::find($id);

        return view('camione.edit', compact('camione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Camione $camione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Camione $camione)
    {
        request()->validate(Camione::$rules);

        $camione->update($request->all());

        return redirect()->route('camiones.index')
            ->with('success', 'Camione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $camione = Camione::find($id)->delete();

        return redirect()->route('camiones.index')
            ->with('success', 'Camione deleted successfully');
    }
}
