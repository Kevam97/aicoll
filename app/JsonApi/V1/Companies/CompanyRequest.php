<?php

namespace App\JsonApi\V1\Companies;

use App\Models\Company;
use Illuminate\Validation\Rule;
use LaravelJsonApi\Laravel\Http\Requests\ResourceRequest;
use LaravelJsonApi\Validation\Rule as JsonApiRule;

class CompanyRequest extends ResourceRequest
{

   /**
     * @return array
     */
    public function deleteRules(): array
    {
        return [
            'meta.status' => 'not_in:yes,on,1,true',
        ];
    }

    /**
     * @return array
     */
    public function deleteMessages(): array
    {
        return [
            'meta.status' =>
              'You cannot delete a Company with status true.',
        ];
    }

   
    public function metaForDelete(Company $company): array
    {
        return [
            'status' => $company->status,
        ];
    }


    public function rules(): array
    {
        return [
            'nit' => ['required', 'string'],
            'name' => ['required', 'string'],
            'address' => ['required', 'string'],
            'status' =>  JsonApiRule::boolean()
        ];
    }

}
