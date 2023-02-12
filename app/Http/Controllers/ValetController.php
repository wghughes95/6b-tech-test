<?php

namespace App\Http\Controllers;

use App\Models\Size;
use App\Models\Valet;
use App\Models\Flexibility;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;

class ValetController extends Controller
{
    /**
     * Summary of index
     * @return View|Factory
     */
    public function index(): View|Factory
    {
        $valets = Valet::all();

        return view('valets.index', [
            'valets' => $valets
        ]);
    }

    /**
     * Display view to create a new valet booking.
     *
     * @return View|Factory
     */
    public function create(): View|Factory
    {
        return view('valets.create', [
            'sizes' => Size::all(),
            'flexibilities' => Flexibility::all()
        ]);
    }

    /**
     * Store a newly created valet booking in database.
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public function store(Request $request): RedirectResponse | Redirector
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'booking_date' => 'required|date_format:Y-m-d',
            'size_id' => 'required|integer',
            'flexibility_id' => 'required|integer',
            'contact_no' => 'required|string|max:15|min:7',
            'email' => 'required|email',
        ]);

        Valet::create($validated);

        return redirect(route('valets.index'));
    }

    /**
     * Display view to edit a selected valet booking.
     *
     * @param Valet $valet
     * @return View|Factory
     */
    public function edit(Valet $valet): View|Factory
    {
        return view('valets.edit', [
            'valet' => $valet,
            'sizes' => Size::all(),
            'flexibilities' => Flexibility::all()
        ]);
    }

    /**
     * Store updated details for selected valet booking.
     * @param Valet $valet
     * @param Request $request
     * @return RedirectResponse|Redirector
     */
    public function update(Valet $valet, Request $request): RedirectResponse | Redirector
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'booking_date' => 'required|date_format:Y-m-d',
            'size_id' => 'required|integer',
            'flexibility_id' => 'required|integer',
            'contact_no' => 'required|string|max:15|min:7',
            'email' => 'required|email',
        ]);

        $valet->update($validated);

        return redirect(route('valets.index'));
    }

    /**
     * Show details for selected valet booking.
     * @param Valet $valet
     * @return Factory|View
     */
    public function show(Valet $valet)
    {
        return view('valets.show', [
            'valet' => $valet,
        ]);
    }

    public function destroy(Valet $valet)
    {
        $valet->delete();

        return redirect(route('valets.index'));
    }
}
