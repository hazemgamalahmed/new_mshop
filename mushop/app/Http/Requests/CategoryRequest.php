<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Category;
class CategoryRequest extends FormRequest
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
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'level' => 'required|numeric'
        ];
        if($this->input('parent_id'))
        {
            $rules['parent_id'] = 'exists:categories,id';
        }

        return $rules;
    }
    public function attributes()
    {
        return [
            'name' => 'category Name',
            'description' => 'Category Description',
            'parent_id' => 'Category Parent',
        ];
    }
    public function prepareForValidation()
    {
        if($this->input('parent_id')){
            $parent = Category::find($this->input('parent_id'));
            $this->merge([
                'level' => $parent->level + 1
            ]);
        }
    }
    

}
