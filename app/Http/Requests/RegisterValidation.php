<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterValidation extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|regex:/^[ЙйЦцУуКкЕеНнГгШшЩщЗзХхЪъФфЫыВвАаПпРрОоЛлДдЖжЭэЯяЧчСсМмИиТтЬьБбЮюЁё\s-]+$/',
            'surname'=>'required|regex:/^[ЙйЦцУуКкЕеНнГгШшЩщЗзХхЪъФфЫыВвАаПпРрОоЛлДдЖжЭэЯяЧчСсМмИиТтЬьБбЮюЁё\s-]+$/',
            'patronymic'=>'nullable',
            'login'=>'required|unique:users|regex:/^[A-Za-z0-9-]+$/',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed|min:6',
            'rules'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'required'=>'Поле должно быть заполнено!',
            'login.unique'=>'Этот логин уже занят, выберите другой!',
            'email.unique'=>'Этот email уже занят, выберите другой!',
            'confirmed'=>'Пароль не совпадает, введите одинаковый пароль!',
            'min'=>'В пароле должно быть не менее 6 символов',
            'regex'=>'Разрешенные символы: кириллица, пробел и тире',
            'login.regex'=>'Разрешенные символы: латиница, цифры и тире',
        ];
    }
}
