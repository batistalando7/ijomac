<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function store(Request $request){       
    $request->validate(['email' => 'required|email']);
        Subscription::create([
            'email' => $request->email
            ]);

        return redirect()->back()->with('Envido com sucesso!');
    }
}
