<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EatRequest extends Request
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
            'datetime' => 'required',
            'store'    => 'required',
            'food'     => 'required',
            'price'    => 'required|integer',
            'rate'     => 'required',
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
            'datetime.required' => '你哪時吃的？',
            'store.required'    => '你在哪吃的？',
            'food.required'     => '你吃了什麼？',
            'price.required'    => '你花了多少？',
            'rate.required'     => '你給他幾分？',
            'price.integer'     => '請填整數唷～',
        ];
    }
}
