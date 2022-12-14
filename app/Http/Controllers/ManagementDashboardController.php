<?php

namespace App\Http\Controllers;

use App\DataTables\UserProjectsDataTable;
use App\DataTables\UsersDataTable;
use App\DataTables\SubscribersDataTable;
use App\Models\User;
use Illuminate\Http\Request;

class ManagementDashboardController extends Controller
{


    public function index()
    {
        echo 'Management Dashboard';
    }

    public function dashboard_index()
    {
        $app_url = env('APP_URL');
        $current_page = 'dashboard';
        $current_page_url = $app_url . 'management';
        $current_page_title = 'Dashboard';
        $current_page_description = 'Dashboard';
        $current_page_icon = 'fas fa-tachometer-alt';
        $page_attributes = array(
            'current_page' => $current_page,
            'current_page_url' => $current_page_url,
            'current_page_title' => $current_page_title,
            'current_page_description' => $current_page_description,
            'current_page_icon' => $current_page_icon,
        );
        return view('backend.management.index', compact('page_attributes'));
    }

    public function view_subscriber_data(SubscribersDataTable $dataTable, Request $request)
    {
        $app_url = env('APP_URL');
        $current_page = 'view_subscriber_data';
        $current_page_url = $app_url . 'management/subscribers';
        $current_page_title = 'View Subscriber Data';
        $current_page_description = 'View Subscriber Data';
        $current_page_icon = 'fas fa-tachometer-alt';
        $page_attributes = array(
            'current_page' => $current_page,
            'current_page_url' => $current_page_url,
            'current_page_title' => $current_page_title,
            'current_page_description' => $current_page_description,
            'current_page_icon' => $current_page_icon,
        );

        $start = $request->input('start');


        return $dataTable->render('backend.management.subscribers', compact('page_attributes'));

//        return view('backend.management.subscribers', compact('page_attributes', 'dataTable_data'));
    }

    public function view_user_info($id)
    {
        $app_url = env('APP_URL');
        $current_page = 'view_user_info';
        $current_page_url = $app_url . 'management/subscriber/' . $id;
        $current_page_title = 'View User Info';
        $current_page_description = 'View User Info';
        $current_page_icon = 'fas fa-tachometer-alt';

        $page_attributes = array(
            'current_page' => $current_page,
            'current_page_url' => $current_page_url,
            'current_page_title' => $current_page_title,
            'current_page_description' => $current_page_description,
            'current_page_icon' => $current_page_icon,
        );
        return view('backend.management.subscriber', compact('page_attributes'));
    }

    public function view_all_user_projects($user_id, UserProjectsDataTable $dataTable)
    {
        if ($user_id == null) {
            return redirect()->route('management.subscribers');
        } else {
            $user_check = User::where('id', $user_id)->first();
            if ($user_check) {
                $app_url = env('APP_URL');
                $current_page = 'view_all_user_projects';
                $current_page_url = $app_url . 'management/subscriber/' . $user_id . '/projects';
                $current_page_title = 'View All User Projects';
                $current_page_description = 'View All User Projects';
                $current_page_icon = 'fas fa-tachometer-alt';

                $user_details = User::where('id', $user_id)
                    ->with('country', function ($query) {
                        $query->select('id', 'name')
                            ->where('is_deleted', 0);
                    })
                    ->with('projects', function ($query) {
                        $query->where('is_deleted', 0);
                    })
                    ->first()
                    ->toArray();
                //       dd($user_details);

                $page_attributes = array(
                    'current_page' => $current_page,
                    'current_page_url' => $current_page_url,
                    'current_page_title' => $current_page_title,
                    'current_page_description' => $current_page_description,
                    'current_page_icon' => $current_page_icon,
                );
                $dataTable = $dataTable->with('user_id', $user_id);
                return $dataTable->render('backend.management.subscribers_projects', compact('page_attributes', 'user_details'));
                //return view('backend.management.subscribers_projects', compact('page_attributes', 'user_details'));

            } else {
                return redirect()->back();
            }
        }
    }

    public function view_non_subscribers()
    {
        $app_url = env('APP_URL');
        $current_page = 'view_non_subscribers';
        $current_page_url = $app_url . 'management/non_subscribers';
        $current_page_title = 'View Non Subscribers';
        $current_page_description = 'View Non Subscribers';
        $current_page_icon = 'fas fa-tachometer-alt';

        $page_attributes = array(
            'current_page' => $current_page,
            'current_page_url' => $current_page_url,
            'current_page_title' => $current_page_title,
            'current_page_description' => $current_page_description,
            'current_page_icon' => $current_page_icon,
        );
        return view('backend.management.non_subscribers', compact('page_attributes'));
    }

    public function view_team_members()
    {
        $app_url = env('APP_URL');
        $current_page = 'view_team_members';
        $current_page_url = $app_url . 'management/team_members';
        $current_page_title = 'View Team Members';
        $current_page_description = 'View Team Members';
        $current_page_icon = 'fas fa-tachometer-alt';

        $page_attributes = array(
            'current_page' => $current_page,
            'current_page_url' => $current_page_url,
            'current_page_title' => $current_page_title,
            'current_page_description' => $current_page_description,
            'current_page_icon' => $current_page_icon,
        );
        return view('backend.management.team_members', compact('page_attributes'));
    }

    public function view_all_projects()
    {
        $app_url = env('APP_URL');
        $current_page = 'view_all_projects';
        $current_page_url = $app_url . 'management/projects';
        $current_page_title = 'View All Projects';
        $current_page_description = 'View All Projects';
        $current_page_icon = 'fas fa-tachometer-alt';

        $page_attributes = array(
            'current_page' => $current_page,
            'current_page_url' => $current_page_url,
            'current_page_title' => $current_page_title,
            'current_page_description' => $current_page_description,
            'current_page_icon' => $current_page_icon,
        );
        // dd($page_attributes);
        return view('backend.management.projects', compact('page_attributes'));
    }

    public function view_project_info($id)
    {
        $app_url = env('APP_URL');
        $current_page = 'view_project_info';
        $current_page_url = $app_url . 'management/project/' . $id;
        $current_page_title = 'View Project Info';
        $current_page_description = 'View Project Info';
        $current_page_icon = 'fas fa-tachometer-alt';

        $page_attributes = array(
            'current_page' => $current_page,
            'current_page_url' => $current_page_url,
            'current_page_title' => $current_page_title,
            'current_page_description' => $current_page_description,
            'current_page_icon' => $current_page_icon,
        );
        return view('backend.management.project', compact('page_attributes'));
    }

    public function add_projects()
    {
        $app_url = env('APP_URL');
        $current_page = 'add_projects';
        $current_page_url = $app_url . 'management/add_project';
        $current_page_title = 'Add Projects';
        $current_page_description = 'Add Projects';
        $current_page_icon = 'fas fa-tachometer-alt';

        $page_attributes = array(
            'current_page' => $current_page,
            'current_page_url' => $current_page_url,
            'current_page_title' => $current_page_title,
            'current_page_description' => $current_page_description,
            'current_page_icon' => $current_page_icon,
        );
        return view('backend.management.add_projects', compact('page_attributes'));
    }

    public function view_reports()
    {
        $app_url = env('APP_URL');
        $current_page = 'view_reports';
        $current_page_url = $app_url . 'management/reports';
        $current_page_title = 'View Reports';
        $current_page_description = 'View Reports';
        $current_page_icon = 'fas fa-tachometer-alt';

        $page_attributes = array(
            'current_page' => $current_page,
            'current_page_url' => $current_page_url,
            'current_page_title' => $current_page_title,
            'current_page_description' => $current_page_description,
            'current_page_icon' => $current_page_icon,
        );
        return view('backend.management.reports', compact('page_attributes'));
    }

    public function view_report_info($id)
    {
        $app_url = env('APP_URL');
        $current_page = 'view_report_info';
        $current_page_url = $app_url . 'management/report/' . $id;
        $current_page_title = 'View Report Info';
        $current_page_description = 'View Report Info';
        $current_page_icon = 'fas fa-tachometer-alt';

        $page_attributes = array(
            'current_page' => $current_page,
            'current_page_url' => $current_page_url,
            'current_page_title' => $current_page_title,
            'current_page_description' => $current_page_description,
            'current_page_icon' => $current_page_icon,
        );
        return view('backend.management.report', compact('page_attributes'));
    }

    public function add_reports()
    {
        $app_url = env('APP_URL');
        $current_page = 'add_reports';
        $current_page_url = $app_url . 'management/add_report';
        $current_page_title = 'Add Reports';
        $current_page_description = 'Add Reports';
        $current_page_icon = 'fas fa-tachometer-alt';

        $page_attributes = array(
            'current_page' => $current_page,
            'current_page_url' => $current_page_url,
            'current_page_title' => $current_page_title,
            'current_page_description' => $current_page_description,
            'current_page_icon' => $current_page_icon,
        );
        return view('backend.management.add_reports', compact('page_attributes'));
    }

    public function view_all_users()
    {
        $app_url = env('APP_URL');
        $current_page = 'view_all_users';
        $current_page_url = $app_url . 'management/users';
        $current_page_title = 'View All Users';
        $current_page_description = 'View All Users';
        $current_page_icon = 'fas fa-tachometer-alt';

        $page_attributes = array(
            'current_page' => $current_page,
            'current_page_url' => $current_page_url,
            'current_page_title' => $current_page_title,
            'current_page_description' => $current_page_description,
            'current_page_icon' => $current_page_icon,
        );
        return view('backend.management.users', compact('page_attributes'));
    }

    public function view_roles()
    {
        $app_url = env('APP_URL');
        $current_page = 'view_roles';
        $current_page_url = $app_url . 'management/roles';
        $current_page_title = 'View Roles';
        $current_page_description = 'View Roles';
        $current_page_icon = 'fas fa-tachometer-alt';

        $page_attributes = array(
            'current_page' => $current_page,
            'current_page_url' => $current_page_url,
            'current_page_title' => $current_page_title,
            'current_page_description' => $current_page_description,
            'current_page_icon' => $current_page_icon,
        );
        return view('backend.management.roles', compact('page_attributes'));
    }

    public function settings()
    {
        $app_url = env('APP_URL');
        $current_page = 'settings';
        $current_page_url = $app_url . 'management/settings';
        $current_page_title = 'Settings';
        $current_page_description = 'Settings';
        $current_page_icon = 'fas fa-tachometer-alt';

        $page_attributes = array(
            'current_page' => $current_page,
            'current_page_url' => $current_page_url,
            'current_page_title' => $current_page_title,
            'current_page_description' => $current_page_description,
            'current_page_icon' => $current_page_icon,
        );
        return view('backend.management.settings', compact('page_attributes'));
    }

    public function manage_api()
    {
        $app_url = env('APP_URL');
        $current_page = 'manage_api';
        $current_page_url = $app_url . 'management/api';
        $current_page_title = 'Manage API';
        $current_page_description = 'Manage API';
        $current_page_icon = 'fas fa-tachometer-alt';

        $page_attributes = array(
            'current_page' => $current_page,
            'current_page_url' => $current_page_url,
            'current_page_title' => $current_page_title,
            'current_page_description' => $current_page_description,
            'current_page_icon' => $current_page_icon,
        );
        return view('backend.management.manage_api', compact('page_attributes'));
    }


}
