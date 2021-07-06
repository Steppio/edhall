<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class GuestLayout extends Component
{

	// public function __construct(){
	//     $this->middleware('auth');
	// }
	
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        if (Auth::check()) {
            return view('layouts.app');
        }
        else {
            return view('layouts.guest');
        }
        
    }
}
