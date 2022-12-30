<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateApplianceRequest extends FormRequest
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
            'name'           => 'required|unique:appliances,name,'.$this->appliance->id,
            'description'    => 'required',
            'image'          => 'nullable',
            'voltage'        => 'required|in:220v,110v,bivolt',
            'brand'          => 'required',
            'status'         => 'required',
            'reference'      => 'required|unique:appliances,reference,'.$this->appliance->id,
            'line'           => 'required',
            'color'          => 'required',
            'product_weight' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'voltage.in' => 'Dados fornecidos devem ser: 220v, 110v ou bivolt',
        ];
    }
}
