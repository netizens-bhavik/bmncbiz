<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserDataController extends Controller
{
    public function manage_subscriber(Request $request)
    {
        $user_id = $request->user_id;
        $response_data = array();
        if ($user_id != null) {
            $user = User::find($user_id);
            if ($user != null) {
                $user_name = $user->name;
                $user_email = $user->email;
                $view_data = array(
                    'user_id' => $user_id,
                    'user_name' => $user_name,
                    'user_email' => $user_email,
                );
                $view = view('backend.management.modals.manage_subscriber_form', compact('view_data'))->render();

                $response_data = array(
                    'status' => 'success',
                    'view' => $view,
                    'message' => 'Edit Subscriber Form Loaded Successfully',
                );

            } else {
                $response_data = array(
                    'status' => 'error',
                    'view' => '',
                    'message' => 'User data not found',
                );
            }

        } else {
            $view = view('backend.management.modals.manage_subscriber_form')->render();
            $response_data = array(
                'status' => 'success',
                'view' => $view,
                'message' => 'New Subscriber Form Loaded Successfully',
            );
        }
        return response()->json([
            'status' => $response_data['status'],
            'view' => $response_data['view'],
            'message' => $response_data['message'],
        ]);
    }

    public function submit_subscriber(Request $request)
    {
        $user_id = $request->user_id;
        if ($user_id != null) {
            $user = User::find($user_id);
            $name = $request->name;
            $email = $request->email;

            $user_email_check = User::where('email', $email)->where('id', '!=', $user_id)->first();
            if ($user_email_check == null) {
                if ($user != null) {
                    $user->name = $request->name;
                    $user->email = $request->email;
                    $user->save();
                    $response_data = array(
                        'status' => 'success',
                        'message' => 'Subscriber Updated Successfully',
                    );
                } else {
                    $response_data = array(
                        'status' => 'error',
                        'message' => 'User data not found',
                    );
                }
            } else {
                $response_data = array(
                    'status' => 'error',
                    'message' => 'Email Already Exist',
                );
            }

        } else {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
            ]);
            if ($validator->fails()) {
                $response_data = array(
                    'status' => 'error',
                    'message' => $validator->errors()->first(),
                );
            } else {
                $user = new User();
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password =bcrypt('password@NetContent');
                $user->save();
                $user->assignRole('subscriber');
                $response_data = array(
                    'status' => 'success',
                    'message' => 'Subscriber Added Successfully',
                );
            }
        }
        return response()->json([
            'status' => $response_data['status'],
            'message' => $response_data['message'],
        ]);
    }



    public function delete_subscriber(Request $request)
    {
        $user_id = $request->user_id;
        $response_data = array();
        if($user_id != null) {
            $user = User::find($user_id);
            if ($user != null) {
                $user->is_deleted = 1;
                $user->save();

                $response_data = array(
                    'status' => 'success',
                    'message' => 'Subscriber Deleted Successfully',
                );
            } else {

                $response_data = array(
                    'status' => 'error',
                    'message' => 'User data not found',
                );
            }
        }else{
            $response_data = array(
                'status' => 'error',
                'message' => 'User data not found',
            );
        }

        return response()->json([
            'status' => $response_data['status'],
            'message' => $response_data['message'],
        ]);
    }

    public function add_user(Request $request)
    {

    }

    public function create_user(Request $request)
    {

    }

    public function edit_user(Request $request)
    {

    }

    public function update_user(Request $request)
    {

    }

    public function delete_user(Request $request)
    {

    }

    public function add_member(Request $request)
    {

    }

    public function create_member(Request $request)
    {

    }

    public function edit_member(Request $request)
    {

    }

    public function update_member(Request $request)
    {

    }

    public function delete_member(Request $request)
    {

    }

}
