<?php 
use App\Http\Controllers\Controller;

class AccountController extends Controller
{

    public function index(Request $request) {
        return view('account.container', ['view' => 'index', 'user' => $request->user()]);
    }
    
    public function profile(Request $request)
    {
        if($request->input())
        {
            $this->userUpdate($request, $request->user()); 
            return back()->with('success', __('Settings saved.'));
        }

        return view('account.container', ['view' => 'profile', 'user' => $request->user()]);
    }
}