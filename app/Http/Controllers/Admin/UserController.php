<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str; 
use App\Message;
use App\Review;
use App\Specialization;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::all();
        $reviews = Review::all();
        return(view('admin.profile', compact('reviews', 'messages')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $profileEdit =  Auth::user();
        $profileSpecialization = $profileEdit->specializations;
        $specializations = Specialization::all();
        return view('admin.profile', compact('profileEdit', 'specializations', 'profileSpecialization'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)

    {       
            $request->validate([
                'address' => 'required|max:100',
                'phone' => 'numeric|nullable',
                'cv'  => 'file|max:5000|nullable|mimes:pdf',
                'profile_pic' => 'image|max:8000|nullable',
                'services' => 'string|max:65000|nullable'
            ]);
            // GRAZIE STACKOVERFLOW
            $profileUpdate = User::where('id', Auth::user()->id)->first();
            $data = $request->all();
            // Controllo che esista ProfilePic su $data
            if (array_key_exists('profile_pic', $data)) {
                // Elimino il la vecchia img
                if ($profileUpdate->profile_pic) {
                    Storage::delete($profileUpdate->profile_pic);
                }
                $profile_pic = Storage::put('profile_pic', $data['profile_pic']);
                $data['profile_pic'] = $profile_pic;
            }
            // Controllo che esista CV su $data
            if (array_key_exists('cv', $data)) {
                // Elimino il vecchio cv
                if ($profileUpdate->cv) {
                    Storage::delete($profileUpdate->cv);
                }
                $cv = Storage::put('cv', $data['cv']);
                $data['cv'] = $cv;
            }
            $profileUpdate->update($data);
            // Controllo che specializations esista su data 
            if(array_key_exists('specializations', $data)) {
                // Faccio la sync di specialization con i propri dati
                $profileUpdate->specializations()->sync($data['specializations']);
            } else {
                // Faccio una sync vuota se non c'è nessun dato
                $profileUpdate->specializations()->sync([]);
            }

            // $slug = $this->calculateSlug($data['title']);
            // $data['slug'] = $slug;
            // $profileUpdate->fill($data);
            // $profileUpdate->save();

            return redirect()->route('admin.home')->with('success', 'Hai modificato correttamente il tuo profilo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $profileDelete = User::where('id', Auth::user()->id)->first();;
        if ($profileDelete->profile_pic) {
            Storage::delete($profileDelete->profile_pic);
        }
        if ($profileDelete->cv) {
            Storage::delete($profileDelete->cv);
        }
        $profileDelete->specializations()->sync([]);
        $profileDelete->sponsorships()->sync([]);
        Auth::logout();
        $profileDelete->delete();
        return redirect()->route('register')->with('danger', 'Hai eliminato il profilo correttamente');
    }

    // protected function calculateSlug($title) {

    //     //inizio calcolo dello slug
    //     $slug = Str::slug($title, '-');

    //     $checkUser = User::withTrashed()->where('slug', $slug)->first();

    //     $counter = 1;

    //     while($checkUser) {
    //         $slug = Str::slug($title . '-' . $counter, '-');
    //         $counter++;
    //         $checkUser = User::withTrashed()->where('slug', $slug)->first();
    //     }
    //     //fine calcolo dello slug

    //     return $slug;

    // }
}
