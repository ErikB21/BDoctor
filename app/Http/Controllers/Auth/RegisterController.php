<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Specialization;
use App\User;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
       
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:100', 'regex: /^([^0-9]*)$/'],
            'surname' => ['required','string', 'max:100','regex: /^([^0-9]*)$/'],
            'address' => ['required','string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users' ],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**{{  }}
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
         
        $user = User::create([
            'name' => $data['name'],
            'surname' => $data['surname'], 
            'address' => $data['address'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $user['slug'] = $this->calculateSlug($data['name'], $data['surname']);
        $user->save();
        $user->specializations()->sync($data['specializations']);
        

        return $user;
    }

    protected function calculateSlug($name, $surname) {

        //inizio calcolo dello slug
        $slug = Str::slug($name . '-' . $surname , '-');

        $checkUser = User::where('slug', $slug)->first();

        $counter = 1;

        while($checkUser) {
            $slug = Str::slug($name . '-' . $surname . '-' . $counter, '-');
            $counter++;
            $checkUser = User::where('slug', $slug)->first();
        }
        

        return $slug;

    }


}
