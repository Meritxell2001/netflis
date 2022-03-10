<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rules\Password;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => [
                'required',
                'confirmed',
                Password::min(8)
                    ->mixedCase()
                    ->letters()
                    ->numbers()
                    ->symbols()
                    ->uncompromised(),
            ],
            'phone' => 'nullable|min:11',
            'sex' => 'required',
        ]);
        /*
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone'
        ]);
        */
        $user = User::create(request(['name', 'email', 'password','phone','sex']));
        event(new Registered($user));

        Auth::login($user);

    return redirect(/*RouteServiceProvider::HOME*/'/list/movie');
    }
    public function remove(Request $request)
    {        
        $user = User::find($request->id);
        $user->delete($request->all());
        return response()->json(new UserResource($user), 200);
    }
    public function update(Request $request)
    {        
        $user = User::find($request->id);
        $user->update($request->all());
        return response()->json(new UserResource($user), 200);
    }
    public function storeUser(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json(new UserResource($user), 200);
    }
}
