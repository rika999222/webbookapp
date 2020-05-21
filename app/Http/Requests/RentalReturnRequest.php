<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RentalReturnRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
       if ($this->path() == 'returns')
       {
         return true;
       } else {
        return false;
    }
}
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'catalog_id' => 'required',
        ];
    }
    public function messages()
    {
      return [
        'catalog_id.required' => '資料IDは必ず入力してください。',
      ];
    }
}
