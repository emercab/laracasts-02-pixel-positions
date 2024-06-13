<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
  public function create()
  {
    return view('auth.register');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $userData = $request->validate([
      'name' => ['required'],
      'email' => ['required', 'email', 'unique:users,email'],
      'password' => ['required', 'confirmed', Password::min(6)],
    ]);

    $employerData = $request->validate([
      'employer' => ['required'],
      'logo' => ['required', File::types(['jpg', 'jpeg', 'png', 'svg', 'gif', 'webp'])],
    ]);

    $user = User::create($userData);

    $logoPath = $request->logo->store('logos');

    $user->employer()->create([
      'name' => $employerData['employer'],
      'logo' => $logoPath,
    ]);

    auth()->login($user);

    return redirect('/');
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
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
