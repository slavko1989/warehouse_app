<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'f_name'=>'required',
            'l_name'=>'required',
            'email'=>'required|email|unique:users,email',
            'date_of_birth'=>'required',

            'positionId'=>'required',
            'education'=>'required',
            'code_of_employee'=>'required'

        ];
    }
}
