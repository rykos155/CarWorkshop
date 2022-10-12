<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Users\StoreUserRequest;
use App\Http\Requests\Users\UpdateUserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $user = new User([
            'name' => $request->input('imię'),
            'surname' => $request->input('nazwisko'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('hasło')),
        ]);

        try {
            $user->save(); 

            return redirect()->route('users.index')->with('success', __("Pomyślnie dodano konto $user->name $user->surname" ));
        } catch (\Illuminate\Database\QueryException $e) {
            \Log::error($e);
            switch ($e->getCode()) {
                case '23000':
                    return redirect()->route('users.index')->with('error', __('Takie konto już istnieje!'));
                    break;
                default:
                    return redirect()->route('users.index')->with('error', __('Wystąpił błąd podczas tworzenia nowego konta!'));
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        $edit = true;
        if($user->id != 1)
        {
            $userValidation = User::where('id',$user->id)->findOrFail($id);
        }
        $user = User::findOrFail($id);
        
        return view('users.formedit', compact('user', 'edit',));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->name = $request->input('imię');
        $user->surname = $request->input('nazwisko');
        $user->email = $request->input('email');

        $user->save();

        try {
        return redirect()->route('users.index')->with('success', __("Pomyślnie zaaktualizowano dane użytkownika $user->name $user->surname" ));
         } catch (\Illuminate\Database\QueryException $e) {
            \Log::error($e);

            switch ($e->getCode()) {
                 case '23000':
                     return redirect()->route('users.index')->with('error', __('Błąd powtórzonych danych!'));
                     break;
                 default:
                    return redirect()->route('users.index')->with('error', __('Błąd podczas edytowania danych użytkownika!'));
             }
         }
    }

    public function changePasswordView(Request $request, $id)
    {
        $edit = true;
        $user = User::findOrFail($id);
        
        return view('users.editpassword', compact('user', 'edit',));
    }

    public function changePassword(Request $request, $id)
    {
        $request->validate([
            'hasło' => ['required'],
            'potwierdź_hasło' => ['same:hasło'],
        ]);

        $user = User::findOrFail($id);

        try {    
            $user->update(['password'=> Hash::make($request->potwierdź_hasło)]);

            return redirect()->route('users.index')->with('success', __('Pomyślnie zmieniono hasło do konta ' . $user->name . " " . $user->surname));
        } catch (\Illuminate\Database\QueryException $e) {
            \Log::error($e);
            
            switch ($e->getCode()) {
                case '23000':
                    return redirect()->route('users.index')
                        ->with('error', __('Błąd podczas zmiany hasła'));
                    break;
                default:
                    return redirect()->route('users.index')
                        ->with('error', __('Błąd podczas zmiany hasła'));
            }
        }
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('Pomyślnie usunięto konto użytkownika');
    }
}
