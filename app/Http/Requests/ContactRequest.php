<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'f_name' => 'required|string|min:10|max:100',
            'l_name' => 'required|string|min:10|max:100',
            'email' => 'required|email',
            'phone' => 'required|min:9|max:15|regex:/^([0-9\s\-\+\(\)]*)$/ ',
            'company_name' => 'required|string|max:500',
            'name' => 'required|string|min:10|max:100',
            'industry_id' => 'required|email',
            '' => 'required|min:9|max:15|regex:/^([0-9\s\-\+\(\)]*)$/ ',
            'message' => 'required|string|max:500',
//
//

        ];
    }


    public function messages(){

        return [
            'required'=>  __('messages.required'),
            'max'=> 'هذا الحقل طويل',
            'min'=> 'هذا الحقل قصير',
//            'category_id.exists'  => 'القسم غير موجود ',
            'email.email'=> 'ضيغه البريد الالكتروني غير صحيحه',
            'message.string'=> 'العنوان لابد ان يكون حروف او حروف وارقام ',
            'name.min'=>'الاسم لابد ان يكون 10 احروف  ',
            'subject.string'=>'الاسم لابد ان يكون حروف او حروف وارقام ',
            'location_type.unique'=> 'رقم الهاتف مستخدم من قبل ',
            'email '=> 'البريد الالكتروني مستخدم من قبل ',
            'phone'=> 'رقم الهاتف مستخدم من قبل ',
     ];
    }

}
