<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;  // Importiamo il modello User

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Estrai tutti gli utenti
        $users = User::all();

        // Passiamo gli utenti alla vista 'user.index'
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mostra la vista per creare un nuovo utente
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validazione dei dati dell'utente
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Crea un nuovo utente
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Reindirizza alla lista degli utenti con un messaggio di successo
        return redirect()->route('admin.users.index')->with('success', 'Utente creato con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        // Mostra i dettagli di un utente
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        // Mostra la vista per modificare l'utente
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // Validazione dei dati dell'utente
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        // Aggiorna i dati dell'utente
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $user->password,
        ]);

        // Reindirizza alla lista degli utenti con un messaggio di successo
        return redirect()->route('admin.users.index')->with('success', 'Utente aggiornato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // Elimina l'utente
        $user->delete();

        // Reindirizza alla lista degli utenti con un messaggio di successo
        return redirect()->route('admin.users.index')->with('success', 'Utente eliminato con successo!');
    }
}
