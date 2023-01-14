<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'organization_name' => ['required'],
            'organization_remark' => ['required'],
            'name' => ['required'],
            'title' => ['required'],
            'sub_title' => ['required'],
            'description' => ['required'],
            'date' => ['required'],
        ];
    }
}
