<?php

namespace App\Http\Requests\Web\Authentication;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequests extends FormRequest
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
      'name' => 'required|string',
      'email' => 'required|string|unique:users,email|email:rfc,dns',
      'password' => 'required|confirmed',
    ];
  }

  public function messages()
  {
    return [
      'name.required'               => 'Nhập tên người dùng',
      'name.string'                 => 'Tên người dùng phải các chữ cái a-z, A-Z, 0-9',
      'email.required'              => 'Nhập email',
      'email.required'              => 'Email phải là các chữ cái lating',
      'email.unique'                => 'Email này đã tồn tại',
      'email.email'                 => 'Email không đúng định dạng',
      'password.required'           => 'Nhập Password, Có ký tự đặc biệt, trên 8 ký tự, hoa, Thường, Số',
      'password.confirmed'          => 'Xác nhận lại Password: password_confirmation',
    ];
  }
}
