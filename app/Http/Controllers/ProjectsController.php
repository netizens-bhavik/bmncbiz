<?php

namespace App\Http\Controllers;

use App\Http\Requests\ManageProject;
use App\Models\Projects;
use App\Models\User;
use Illuminate\Http\Request;
use Elegant\Sanitizer\Sanitizer;
use Illuminate\Support\Facades\Auth;
use Pdp\Domain;
use Pdp\TopLevelDomains;

class ProjectsController extends Controller
{
    public function manage_project(Request $request)
    {
        $user_id = $request->user_id;
        $project_id = $request->project_id ?? null;

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
                if ($project_id != null) {
                    $project = Projects::find($project_id);
                    if ($project != null) {
                        $view_data['project'] = $project;
                        $view = view('backend.management.modals.manage_project_form', compact('view_data'))->render();
                        $response_data = array(
                            'status' => 'success',
                            'view' => $view,
                            'message' => 'Edit Project Form Loaded Successfully',
                        );
                    }
                } else {
                    $view = view('backend.management.modals.manage_project_form', compact('view_data'))->render();
                    $response_data = array(
                        'status' => 'success',
                        'view' => $view,
                        'message' => 'New Project Form Loaded Successfully',
                    );
                }

            } else {
                $response_data = array(
                    'status' => 'error',
                    'view' => '',
                    'message' => 'User data not found',
                );
            }
        } else {
            $response_data = array(
                'status' => 'error',
                'view' => '',
                'message' => 'User data not found',
            );
        }
        return response()->json([
            'status' => $response_data['status'],
            'view' => $response_data['view'],
            'message' => $response_data['message'],
        ]);

    }

    public function submit_project(ManageProject $request)
    {
        $data = $request->validated();
        $domainData = array();
        $response_data = array();
        $app_url = env('APP_URL');

        if ($data) {
            $sanitizer = new Sanitizer($data, [
                'user_id' => 'trim|escape|strip_tags|cast:int|empty_string_to_null',
                'project_id' => 'trim|escape|strip_tags|cast:int|empty_string_to_null',
                'project_name' => 'trim|escape|strip_tags|cast:string|capitalize|empty_string_to_null',
                'project_description' => 'trim|escape|strip_tags|cast:string|capitalize|empty_string_to_null',
                'project_type' => 'trim|escape|strip_tags|cast:string|empty_string_to_null',
                'project_website_url' => 'trim|escape|strip_tags|empty_string_to_null',
                'project_work_type' => 'trim|escape|strip_tags|cast:string|empty_string_to_null',
                'project_status' => 'trim|escape|strip_tags|cast:string|empty_string_to_null',
            ]);
            $data = $sanitizer->sanitize();
            $user_id = $data['user_id'];
            $project_id = $data['project_id'] ?? null;
            $project_name = $data['project_name'];
            $project_description = $data['project_description'];
            $project_type = $data['project_type'];
            $project_website_url = $data['project_website_url'];
            $project_work_type = $data['project_work_type'];
            $project_status = $data['project_status'];

            $user = User::find($user_id);
            if ($user) {
                $project = Projects::find($project_id);
                if ($project) {
                    echo 'edit';
                } else {
                    if ($project_website_url != null) {
                        $url = ValidateController::url_format($project_website_url);
                        $url = json_decode(json_encode($url), true);
                        if ($url['original']['status'] == 'success') {
                            $sanitized_url = $url['original']['sanitized_url'];
                            $parsed_url = parse_url($sanitized_url);
                            $parsed_url_scheme = $parsed_url['scheme'];
                            $parsed_url_host = $parsed_url['host'];
                            $parsed_url_path = $parsed_url['path'];
                            $host_name = gethostbyname($parsed_url_host);
                            if ($host_name == $parsed_url_host) {
                                $response_data = array(
                                    'status' => 'error',
                                    'view' => '',
                                    'message' => 'Invalid URL',
                                );
                            } else {

                                $tldsAlphaByDomain_path = $app_url . "vendor/jeremykendall/php-domain-parser/test_data/tlds-alpha-by-domain.txt";
                                $topLevelDomains = TopLevelDomains::fromPath($tldsAlphaByDomain_path);
                                $domain_details = Domain::fromIDNA2008($parsed_url_host);
                                $result = $topLevelDomains->resolve($domain_details);
                                $domainData['domain'] =$result->domain()->toString();
                                $domainData['suffix'] =$result->suffix()->toString();
                                $domainData['secondLevelDomain'] =$result->secondLevelDomain()->toString();
                                $domainData['registrableDomain'] =$result->registrableDomain()->toString();
                                $domainData['subDomain'] =$result->subDomain()->toString();

                                dd($domainData);


                            }
                        } else {
                            $response_data = array(
                                'status' => 'error',
                                'view' => '',
                                'message' => 'Invalid Website URL',
                            );
                        }
                    } else {
                        echo 'no url';
                    }
                }

            } else {
                $response_data = array(
                    'status' => 'error',
                    'view' => '',
                    'message' => 'User data not found',
                );
            }
        } else {
            $response_data = array(
                'status' => 'error',
                'view' => '',
                'message' => 'User data not found',
            );
        }


    }

    public function delete_project(Request $request)
    {
        dd($request->all());
    }
}
