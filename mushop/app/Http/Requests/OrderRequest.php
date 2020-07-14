<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'client_id' => 'required|exists:clients,id',
            'date' => 'required|date',
            'products' => 'required|array|min:1',
            'products.*.quantity' => 'required|numeric|min:1',
            'products.*.product_id' => 'required|exists:products,id',
            'products.*.price' => 'required|numeric',
            'products.*.total' => 'required|numeric'
        ];
    }
    public function messages()
    {
        return [
            'client_id.required' => 'the client id is required',
            'client_id.exists' => 'sorry, invalid clients',
            'date.required' => 'sorry, the date is required'
        ];
    }
}
