<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ChangePasswordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('changePassword');
    } 
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'obecne_hasło' => ['required', new MatchOldPassword],
            'nowe_hasło' => ['required'],
            'potwierdź_nowe_hasło' => ['same:nowe_hasło'],
        ]);
   

        try {    
            User::find(auth()->user()->id)->update(['password'=> Hash::make($request->nowe_hasło)]);

            return redirect()->route('users.index')->with('success', __('Pomyślnie zmieniono hasło do konta'));
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
}
