<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManageProject extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => 'required|integer',
            'project_id' => 'nullable|integer',
            'project_name' => 'required|string',
            'project_description' => 'nullable|string',
            'project_type' => 'required|string',
            'project_website_url' => 'nullable|string',
            'project_work_type' => 'required|string',
            'project_status' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'User ID is required',
            'user_id.integer' => 'User ID must be an integer',
            'project_id.integer' => 'Project ID must be an integer',
            'project_name.required' => 'Project Name is required',
            'project_name.string' => 'Project Name must be a string',
            'project_description.string' => 'Project Description must be a string',
            'project_type.required' => 'Project Type is required',
            'project_type.string' => 'Project Type must be a string',
            'project_website_url.string' => 'Project Website URL must be a string',
            'project_work_type.required' => 'Project Work Type is required',
            'project_work_type.string' => 'Project Work Type must be a string',
            'project_status.required' => 'Project Status is required',
            'project_status.string' => 'Project Status must be a string',
        ];
    }
}
