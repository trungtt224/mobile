<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class BrandFormRequest extends Request
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
            'name' => 'required|unique:brand,name',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Brand name is required',
            'name.unique' => 'Brand: '. $this->request->get('name') . " is exist"

        ];
    }

}
