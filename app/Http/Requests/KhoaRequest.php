<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KhoaRequest extends FormRequest
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
            'ten_khoa' => 'required|max:50|string',
            'thoi_gian_bat_dau' => 'required',
            'ma_khoa' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute bắt buộc phải điền!',

        ];
    }

    public function attributes()
    {
        return [
            'ten_khoa' => 'Tên khóa',
            'thoi_gian_bat_dau' => 'Thời gian bắt đầu',
            'ma_khoa' => 'Mã khóa'
        ];
    }
}
