<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller {
    /**
    * Create a new controller instance.
    *
    * @return void
    */

    // public function __construct() {
    //     $this->middleware( 'auth' );
    // }
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */

    public function index() {
        $title = 'Home';
        return view( 'home', compact( 'title' ) );
    }

    public function aboutus() {
        $title = 'About us';
        return view( 'about', compact( 'title' ) );
    }

    public function contactus() {
        $title = 'Contact Us';
        return view( 'contact', compact( 'title' ) );
    }

    public function gallery() {
        $title = 'Gallery';
        return view( 'gallery', compact( 'title' ) );
    }

    public function showRegistrationForm() {
        $title = 'Registration';
        return view( 'auth.register', compact( 'title' ) );
    }

    public function register( Request $request ) {
        $register = User::create( [
            'name'=> $request->get( 'first_name' ).' '.$request->get( 'last_name' ),
            'email'=> $request->get( 'email' ),
            'phone'=> $request->get( 'phone' ),
            'password'=> Hash::make( $request->get( 'password' ) )
        ] );
        if ( $register ) {
            return redirect()->route( 'dashboard' );
        } else {
            return redirect()->back();
        }
    }

    public function showLoginForm() {
        $title = 'Login';
        return view( 'auth.login', compact( 'title' ) );
    }

    public function login( Request $request ) {
        $email = $request->get( 'email' );
        $password = $request->get( 'password' );
        $credials = [
            'email'=>$email,
            'password'=>$password,
        ];
        if ( Auth::attempt( $credials ) ) {
            return redirect()->route( 'dashboard' );
        } else {
            return redirect()->back();
        }
    }

    public function dashboard() {
        $title = 'Dashboard';
        return view( 'dashboard_front', compact( 'title' ) );
    }
}
