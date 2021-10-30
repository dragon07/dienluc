<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NhanVienRequest extends FormRequest
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
            'ho_ten' => 'required',
            'mst' =>'required|unique:nhan_viens',
            'so_hieu_hrms'=> 'required|unique:nhan_viens',
            'ma_erp' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'ho_ten.required' => 'Tên nhân viên không được bỏ trống!',
            'mst.required' => 'Mã số thuế không được bỏ trống!',
            'mst.unique' => 'Mã số thuế đã tồn tại, vui lòng kiểm tra lại!',
            'so_hieu_hrms.unique' => 'Số hiệu HRMS đã tồn tại, vui lòng kiểm tra lại!',
            'so_hieu_hrms.required' => 'Số hiệu HRMS không được bỏ trống!',
            'ma_erp.required' => 'Mã ERP không được bỏ trống!',
        ];
    }
}
