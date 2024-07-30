<?php

namespace App\Http\Controllers\Todo;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $max_data = 5;
        $userId = Auth::id();

        if (request('search')) {
            $data = Todo::where('user_id', $userId)
                        ->where('task', 'like', '%' . request('search') . '%')
                        ->orderBy('id', 'desc')
                        ->paginate($max_data);
        } else {
            $data = Todo::where('user_id', $userId)
                        ->orderBy('id', 'desc')
                        ->paginate($max_data);
        }
        return view('todo.app', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'task' => 'required|min:3|max:255',
        ], [
            'task.required' => 'Task harus diisi',
            'task.min' => 'Task minimal 3 karakter',
            'task.max' => 'Task maksimal 255 karakter',
        ]);

        $data = [
            'task' => $request->input('task'),
            'user_id' => Auth::id(),
        ];

        Todo::create($data);

        return redirect()->route('todo')->with('success', 'Task berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'task' => 'required|min:3|max:255',
        ], [
            'task.required' => 'Task harus diisi',
            'task.min' => 'Task minimal 3 karakter',
            'task.max' => 'Task maksimal 255 karakter',
        ]);

        $data = [
            'task' => $request->input('task'),
            'is_done' => $request->input('is_done'),
        ];

        Todo::where('id', $id)
            ->where('user_id', Auth::id())
            ->update($data);

        return redirect()->route('todo')->with('success', 'Task berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Todo::where('id', $id)
            ->where('user_id', Auth::id())
            ->delete();

        return redirect()->route('todo')->with('success', 'Task berhasil dihapus');
    }
}
