<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use App\Models\hardware;
use App\Models\log;
use App\Models\Cache;
use App\Models\CacheProfile;
use App\Models\Certifications;
use App\Models\hist_mails;
use App\models\HistUsersCurrent;
use App\Models\RankingUser;
use App\Models\users_stats;
use App\Models\UsersLearning;
use App\Models\UsersPuzzle;
use App\Models\UsersLanguage;
use Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('/');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        return view('/');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/');
        }


        // check if they're an existing user
        $credentials = User::where('email', $user->email)->first();
        //var_dump(Auth::attempt($credentials));die();exit();
        if ($credentials) {
            Auth::loginUsingId($credentials->id, $remember = true);
            return redirect()->intended('dashboard')
                ->withSuccess('You have Successfully loggedin');
        } else {
            $newUser = User::create([
                'login' => $user->name,
                'learning' => 0,
                'premium' => 0,
                'email' => $user->email,
                'password' => ''
            ]);
            users_stats::create(['uid' => $newUser->id, 'dateJoined' => time()]);
            log::create([
                'userID' => $newUser->id,
                'text' => 'localhost installed current operating system',
                'isNPC' => 0
            ]);
            users_stats::create(['uid' => $newUser->id, 'dateJoined' => now()]);
            hardware::create(['userID' => $newUser->id, 'name' => 'Server #1']);
            cache::create(['userID' => $newUser->id]);
            CacheProfile::create(['userID' => $newUser->id, 'expireDate' => now()]);
            HistUsersCurrent::create(['userID' => $newUser->id]);
            RankingUser::create(['userID' => $newUser->id, 'rank' => -1]);
            Certifications::create(['userID' => $newUser->id]);
            UsersPuzzle::create(['userID' => $newUser->id]);
            UsersLearning::create(['userID' => $newUser->id]);
            UsersLanguage::create(['userID' => $newUser->id]);

            Auth::loginUsingId($newUser->id, $remember = true);
            return redirect()->intended('dashboard')
                ->withSuccess('You have Successfully loggedin');

        }
        return redirect("/")->withSuccess('Something went wrong with google.');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('You have Successfully loggedin');
        }

        return redirect("/")->withSuccess('Oppes! You have entered invalid credentials');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect("/")->withSuccess('Opps! You do not have access');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
        $userdata = User::create([
            'login' => $data['name'],
            'learning' => 0,
            'premium' => 0,
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        log::create([
            'userID' => $userdata->id,
            'text' => 'localhost installed current operating system'
        ]);
        users_stats::create(['uid' => $userdata->id, 'dateJoined' => now()]);
        hardware::create(['userID' => $userdata->id, 'name' => 'Server #1']);
        cache::create(['userID' => $userdata->id]);
        CacheProfile::create(['userID' => $userdata->id, 'expireDate' => now()]);
        HistUsersCurrent::create(['userID' => $userdata->id]);
        RankingUser::create(['userID' => $userdata->id, 'rank' => -1]);
        Certifications::create(['userID' => $userdata->id]);
        UsersPuzzle::create(['userID' => $userdata->id]);
        UsersLearning::create(['userID' => $userdata->id]);
        UsersLanguage::create(['userID' => $userdata->id]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }
}
