<?php

namespace App\Api\V1\Requests;

use Config;
use Dingo\Api\Http\FormRequest;

class RumahRequest extends FormRequest
{
    public function rules()
    {
        return Config::get('boilerplate.rumah.validation_rules');
    }

    public function authorize()
    {
        return true;
    }
}
