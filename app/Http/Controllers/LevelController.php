<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\sms\Services\Levels\levelServices;
use Jambasangsang\Flash\Facades\LaravelFlash;


class LevelController extends Controller{

    public function index(): View
    {

        return view('admins.levels.index', ['levels' => Level::get()]);
    }


    public function create(): View
    {
        return view('admins.levels.create', ['']);
    }


    public function store(Request $request, levelServices $levelServices): RedirectResponse
    {
        $this->validated($request);
        $levelServices->storeLevelData($request);
        LaravelFlash::withSuccess("Level Created Successfully!");
        return redirect()->route('levels.index');
    }


    public function show(Level $level): View
    {
        return view('admins.levels.show', compact('level'));
    }

    public function edit(Level $level): View
    {
        return view('admins.levels.edit', compact('level'));
    }


    public function update(Request $request, Level $level): RedirectResponse
    {
        return redirect()->route('levels.index');
    }


    public function destroy(Level $level, levelServices $levelServices): RedirectResponse
    {
        $levelServices->deleteLevelData($level);
        LaravelFlash::withSuccess("Level Deleted Successfully!");
        return redirect()->route('levels.index');
    }

    protected function validated($request)
    {

        return $this->validate($request, [
            'level_name' => 'required|max:100',
            'level_status' => 'required|max:100',
            'description' => 'nullable|max:200'
        ]);
    }
}
