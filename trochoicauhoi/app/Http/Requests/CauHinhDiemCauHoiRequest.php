<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CauHinhDiemCauHoiRequest extends FormRequest
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
            'thu_tu'=>'bail|required|numeric|min:1',
            'diem'=>'bail|required|numeric|min:1'
        ];
    }
     public function messages()
    {
        return [
            'thu_tu.required'=>'Thứ tự không được để trống !!',
            'thu_tu.numeric'=>'Thứ tự phải là số !!',
            'thu_tu.min'=>'Thứ tự không được bé hơn 1 !!',
            'diem.required'=>'Điểm trả lời không được để trống !!',
            'diem.numeric'=>'Điểm trả lời phải số !!',
            'diem.min'=>'Điểm trả lời không được bé hơn 1'
        ];
    }
}
