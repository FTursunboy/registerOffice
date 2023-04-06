<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationDataRequest extends FormRequest
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
         * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
         */
        public    function rules(): array
        {
            return [
                'firstname' => ['required', 'min:3', 'max:20'],
                'lastname' => ['required', 'min:3', 'max:20'],
                'patromymic' => ['required', 'min:3', 'max:20'],
                'nation' => ['required', 'min:3', 'max:20'],
                'birthplace' => ['required', 'min:3', 'max:50'],
                'birthdate' => ['required', 'min:3', 'max:20'],
                'workplace' => ['required', 'min:3', 'max:20'],
                'education' => ['required'],
                'family_status' => ['required'],
                'region_id' => ['required'],
                'otdel_id' => ['required'],
                'gender' => ['required'],
                'child_birthdate' => ['required'],
                'child_name' => ['required'],
                'address' => ['required', 'min:5'],
                'passport_data' => ['required', 'min:10'],
                'passport_from' => ['required', 'min:5'],
                'surname_to' => 'required',
                'wedding_date' => 'required',
            ];
        }

}

