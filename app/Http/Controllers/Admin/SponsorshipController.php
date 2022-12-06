<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Sponsorship;
use App\SponsorshipUser;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SponsorshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $sponsorships = Sponsorship::all();
    $user = Auth::user();

    $newSponsorships = SponsorshipUser::where('user_id', $user->id)->get();

    return view('admin.sponsorship.index', compact('sponsorships', 'user', 'newSponsorships'));

}
protected $dates = [
    'starts_at',
    'ends_at',
];

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
    public function store(){

        $data = request()->all();
    
    
        $user = Auth::user();
        $sponsorship = Sponsorship::find($data['sponsorship_id']);
        $PivotDelete = User::where('id', Auth::user()->id)->first();
        $PivotDelete->sponsorships()->sync([]);
        $newSponsorships = SponsorshipUser::where('user_id', $user->id)->get();
    
        $newSponsorship = new SponsorshipUser();
        $newSponsorship->user_id = $user->id;
        $newSponsorship->sponsorship_id = $data['sponsorship_id'];
    
        $currentDateTime = Carbon::now();
    
        if($newSponsorships->last() && $newSponsorships->last()->ends_at > $currentDateTime){
            return redirect()->back()->with('status', 'errore');
        }else{
            $newSponsorship->starts_at = Carbon::now();
            $newSponsorship->ends_at = $currentDateTime->addHours($sponsorship->duration);
            $newSponsorship->fill($data);
            $newSponsorship->save();
        }
    
    
    
        return redirect()->route('admin.sponsorship.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
