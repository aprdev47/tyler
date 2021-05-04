<?php

namespace App\Http\Controllers\Samples;

use App\Events\NewSubscriptionReceived;
use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request){
        Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'level' => 'required|digits_between:1,3',
            'experience' => 'required|in:beginner,intermediate,expert'
        ])->validate();
        $subscription = Subscription::create($request->all());
        return redirect()->back()->with('success', 'your message,here');;
    }
}
