<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CauHinhAppRequest extends FormRequest
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
            'co_hoi_sai'=>'bail|required|numeric|min:0',
            'thoi_gian_tra_loi'=>'bail|required|numeric|min:1'
        ];
    }
     public function messages()
    {
        return [
            'co_hoi_sai.required'=>'Cơ hội sai không được để trống !!',
            'co_hoi_sai.numeric'=>'Cơ hội sai phải là số !!',
            'co_hoi_sai.min'=>'Cơ hội sai không được bé hơn 0 !!',
            'thoi_gian_tra_loi.required'=>'Thời gian trả lời không được để trống !!',
            'thoi_gian_tra_loi.numeric'=>'Thời gian trả lời phải số !!',
            'thoi_gian_tra_loi.min'=>'Thời gian trả lời không được bé hơn 1'
        ];
    }
}
