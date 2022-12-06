<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{

    public function index()
    {   
        $data = request()->all();

        $queryUsers = User::with(['reviews','specializations','sponsorships'])
            ->select('users.*',DB::raw('(select round(avg(vote)) from reviews where user_id = users.id) as avgVote'))
            ->withCount(['sponsorships','reviews'])
            ->orderBy('sponsorships_count', 'desc')->inRandomOrder();
            
        if($data['avgVote'] > 0){
            $queryUsers = $queryUsers->having('avgVote','>=',$data['avgVote']);
        }

        if($data['reviewsNumber'] > 0){
            $queryUsers = $queryUsers->having('reviews_count','>=', $data['reviewsNumber']);
        }

        if($data['specializationName'] != 'Tutti i Medici'){
       
            $queryUsers = $queryUsers->whereHas('specializations', function ($q){
                $data = request()->all();
                $q->where('specialization_id', '=' , $data['specializationName']);
            });  
        }
        
        
        $allUsers = $queryUsers->get();

        return response()->json([
            'success' => true,
            'results' => $allUsers,
        ]);

    }

    public function show($slug)
    {
        $user = User::where('slug' , $slug)->with('specializations')->first();

        if($user){
            return response()->json([
                'success' => true,
                'resolve' => $user
            ]);
        }else {
            return response()->json([
                'success' => false,
                'message' => 'user non trovato'
            ]);
        }
    }
};
