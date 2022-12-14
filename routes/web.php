<?php

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\UserDataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementDashboardController;
use App\Http\Controllers\UserDashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::group(['middleware' => 'prevent-back-history'], function () {
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/dashboard', function () {
            if (Auth::user()->hasRole('management')) {
                return redirect('/management');
            } elseif (Auth::user()->hasRole('admin')) {
                return redirect('/management');
            } elseif (Auth::user()->hasRole('team_member')) {
                return redirect('/management');
            } elseif (Auth::user()->hasRole('subscriber')) {
                return redirect('/user');
            } else {
                return redirect('/user');
            }
        })->name('dashboard');

        Route::middleware(['maintain-dashboard-sessions', 'role:management|admin|team_member'])->name('management.')->prefix('management')->group(function () {
            Route::get('/', [ManagementDashboardController::class, 'dashboard_index'])->name('dashboard');

            Route::get('/subscribers', [ManagementDashboardController::class, 'view_subscriber_data'])->name('subscribers');
            Route::get('/non-subscribers', [ManagementDashboardController::class, 'view_non_subscribers'])->name('non-subscribers');
            Route::get('/team-members', [ManagementDashboardController::class, 'view_team_members'])->name('team-members');
            Route::get('/user/{id}', [ManagementDashboardController::class, 'view_user_info'])->name('user');
            Route::get('/projects', [ManagementDashboardController::class, 'view_all_projects'])->name('projects');
            Route::get('/user-projects', function () {
                return redirect('/management');
            })->name('user-projects');
            Route::get('/user-projects/{user_id}', [ManagementDashboardController::class, 'view_all_user_projects'])->name('user-projects');
            Route::get('/add-projects', [ManagementDashboardController::class, 'add_projects'])->name('add-projects');
            Route::get('/project/{id}', [ManagementDashboardController::class, 'view_project_info'])->name('project');
            Route::get('/reports', [ManagementDashboardController::class, 'view_reports'])->name('reports');
            Route::get('/report/{id}', [ManagementDashboardController::class, 'view_report_info'])->name('report');
            Route::get('/add-reports', [ManagementDashboardController::class, 'add_reports'])->name('add-reports');

            Route::get('/all-users', [ManagementDashboardController::class, 'view_all_users'])->name('all-users');
            Route::get('/roles', [ManagementDashboardController::class, 'view_roles'])->name('roles');
            Route::get('/role/{id}', [ManagementDashboardController::class, 'manage_role'])->name('manage-role');
            Route::get('/permissions', [ManagementDashboardController::class, 'permissions'])->name('permissions');
            Route::get('/settings', [ManagementDashboardController::class, 'settings'])->name('settings');
            Route::get('/manage-api', [ManagementDashboardController::class, 'manage_api'])->name('manage-api');

            //POST subscriber Routes for management
            Route::post('/manage-subscriber', [UserDataController::class, 'manage_subscriber'])->name('manage-subscriber');
            Route::post('/submit-subscriber', [UserDataController::class, 'submit_subscriber'])->name('submit-subscriber');
            Route::post('/delete-subscriber', [UserDataController::class, 'delete_subscriber'])->name('delete-subscriber');

            //POST Non Subscriber (user) Routes for management
            Route::post('/add_user', [UserDataController::class, 'add_user'])->name('add_user');
            Route::post('/create_user', [UserDataController::class, 'create_user'])->name('create_user');
            Route::post('/edit_user', [UserDataController::class, 'edit_user'])->name('edit_user');
            Route::post('/update_user', [UserDataController::class, 'update_user'])->name('update_user');
            Route::post('/delete_user', [UserDataController::class, 'delete_user'])->name('delete_user');

            //POST Team Routes for management
            Route::post('/add_member', [UserDataController::class, 'add_member'])->name('add_member');
            Route::post('/create_member', [UserDataController::class, 'create_member'])->name('create_member');
            Route::post('/edit_member', [UserDataController::class, 'edit_member'])->name('edit_member');
            Route::post('/update_member', [UserDataController::class, 'update_member'])->name('update_member');
            Route::post('/delete_member', [UserDataController::class, 'delete_member'])->name('delete_member');

            //POST Project Routes for management


            Route::post('/manage-project', [ProjectsController::class, 'manage_project'])->name('manage-project');
            Route::post('/submit-project', [ProjectsController::class, 'submit_project'])->name('submit-project');
            Route::post('/delete-project', [ProjectsController::class, 'delete_project'])->name('delete-project');

            Route::post('/generate_report/{id}', [ProjectsController::class, 'generate_report'])->name('generate_report');
            Route::post('/check_wesite_wealth', [ProjectsController::class, 'check_wesite_wealth'])->name('check_wesite_wealth');
            Route::post('/view_report', [ProjectsController::class, 'view_report'])->name('view_report');
            Route::post('/mail_project', [ProjectsController::class, 'mail_project'])->name('mail_project');
            Route::post('/send_mail', [ProjectsController::class, 'send_mail'])->name('send_mail');
            Route::post('/upload_project_files', [ProjectsController::class, 'upload_project_files'])->name('upload_project_files');
            Route::post('/submit_project_files', [ProjectsController::class, 'submit_project_files'])->name('submit_project_files');

            Route::get('/logout', function () {
                Auth::logout();
                return redirect('/');
            })->name('logout');
        });

        Route::middleware(['maintain-dashboard-sessions', 'role:subscriber|user'])->name('user.')->prefix('user')->group(function () {
            Route::get('/', [UserDashboardController::class, 'index'])->name('dashboard');

            Route::get('/logout', function () {
                Auth::logout();
                return redirect('/');
            })->name('logout');
        });


        Route::get('/logout', function () {
            Auth::logout();
            return redirect('/');
        })->name('logout');
    });

});

require __DIR__ . '/auth.php';
