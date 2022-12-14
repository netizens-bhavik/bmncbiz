<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MaintainDashboardSessions
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse) $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //return $next($request);

        $response = $next($request);

        $logged_in_user = Auth::user();
        $logged_in_user_data = array();

        if ($logged_in_user) {
            $user_id = $logged_in_user->id;
            $user_name = $logged_in_user->name;
            $user_email = $logged_in_user->email;

            $user_data = User::with('country', 'projects', 'dataChannels')->where('id', $user_id)->first();
            $all_user_data = $user_data->toArray();

            $request->session()->put('user_id', $user_id);
            $request->session()->put('user_name', $user_name);
            $request->session()->put('user_email', $user_email);
            $request->session()->put('projects', $all_user_data['projects']);
            $request->session()->put('data_channels', $all_user_data['data_channels']);
            $request->session()->put('country', $all_user_data['country']);
            $request->session()->save();

            // dd($request->session()->all());
            return $response;
        } else {
            return redirect()->route('login');
        }

    }
}
