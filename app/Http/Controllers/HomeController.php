<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qoutes;

use App\Constants\GlobalConstants;

class HomeController extends Controller
{
    public function index() {
        $users = Qoutes::getQoutes('');
        return view('home')->with('users', $users);
    }

    public function getMoreUsers(Request $request) {
        $query = $request->search_query;
        if($request->ajax()) {
            $users = Qoutes::getQoutes($query);
                return view('pages.user_data', compact('users'))->render();
        }
    }
    public function getqouterand(Request $request) {
        // $query = $request->search_query;
        // User::all()->random(10);
        if($request->ajax()) {
            $users = Qoutes::all()->random(5);
            
                event(new \App\Events\SendMessage());
                return view('pages.user_data', compact('users'))->render();
        }
    }

}
