<?php

namespace App\Http\Controllers;

use App\Models\Console;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConsoleController extends Controller
{
    public function index()
    {
        $consoles = Console::all();
        return view('consoles.index', compact('consoles'));
    }

    public function create()
    {
        return view('consoles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'type' => 'required|max:255',
            'description' => 'required',
            'daily_rate' => 'required|numeric',
            'weekly_rate' => 'nullable|numeric',
            'monthly_rate' => 'nullable|numeric',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('consoles', 'public');
            $validated['image'] = $imagePath;
        }

        Console::create($validated);

        return redirect()->route('consoles.index')
            ->with('success', 'Konsol berhasil ditambahkan.');
    }

    public function edit(Console $console)
    {
        return view('consoles.edit', compact('console'));
    }

    public function update(Request $request, Console $console)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'type' => 'required|max:255',
            'description' => 'required',
            'daily_rate' => 'required|numeric',
            'weekly_rate' => 'nullable|numeric',
            'monthly_rate' => 'nullable|numeric',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($console->image) {
                Storage::disk('public')->delete($console->image);
            }
            $imagePath = $request->file('image')->store('consoles', 'public');
            $validated['image'] = $imagePath;
        }

        $console->update($validated);

        return redirect()->route('consoles.index')
            ->with('success', 'Konsol berhasil diperbarui.');
    }

    public function destroy(Console $console)
    {
        if ($console->image) {
            Storage::disk('public')->delete($console->image);
        }
        
        $console->delete();

        return redirect()->route('consoles.index')
            ->with('success', 'Konsol berhasil dihapus.');
    }

    public function show($id)
    {
        $console = \App\Models\Console::find($id);
        if (!$console) {
            return redirect()->route('consoles.index')->with('error', 'Konsol tidak ditemukan.');
        }
        return view('consoles.show', compact('console'));
    }
} 