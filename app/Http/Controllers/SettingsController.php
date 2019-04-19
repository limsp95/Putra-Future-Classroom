<?php
    namespace App\Http\Controllers;
    use App\User;
    use Auth;
    use Illuminate\Support\Facades\Route;

    use Illuminate\Http\Request;

    class SettingsController extends Controller
    {
        public function __construct()
        {
            $this->middleware('auth');
        }

        public function index()
        {
            $userId = Auth::id();
            $method = Route::current();
            activity()
                ->causedBy($userId)
                ->log('Accessed setting page by :causer.name');
            return view('settings');
            
        }
    }