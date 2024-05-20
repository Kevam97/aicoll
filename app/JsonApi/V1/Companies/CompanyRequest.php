<?php

namespace App\JsonApi\V1\Companies;

use Illuminate\Validation\Rule;
use LaravelJsonApi\Laravel\Http\Requests\ResourceRequest;
use LaravelJsonApi\Validation\Rule as JsonApiRule;

class CompanyRequest extends ResourceRequest
{

    /**
     * Get the validation rules for the resource.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'nit' => ['required', 'string'],
            'name' => ['required', 'string'],
            'address' => ['required', 'string'],
        ];
    }

}
