<?php

namespace App\Http\Controllers\Api;

use App\Notifications\PersonSubscribed;
use App\Subscriptor;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Notification;

class SubscriptionsController extends Controller
{
    public function store(Request $request)
    {
        Subscriptor::create([
            'email' => $request->get('email')
        ]);
        
        $user = new User;
        
        Notification::send($user, new PersonSubscribed($request->get('email')));
        
        return response()->json([
            'message' => 'Muchas gracias! En cuanto tengamos novedades nos ponemos en contacto contigo.'
        ]);
        
    }
}
