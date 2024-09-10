<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostInboxRequest extends FormRequest
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
     * @return array
     */

    public function rules(): array
    {
        return [
            'source'=>['required'],
            'fullname' => ['required'],
            'company' => ['nullable'],
            'email' => ['required'],
            'phone' => ['required'],
            'interest' => ['nullable'],
            'budget' => ['nullable'],
            'message' => ['nullable'],
            'referralCode' => ['nullable']
        ];
    }
}
