<?php

namespace App\Domains\Companie\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreJobRequest.
 */
class StoreJobRequest extends FormRequest
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
            // Code ...
        ];
    }
}
