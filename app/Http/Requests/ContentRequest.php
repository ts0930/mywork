<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           'title' => 'required|max:40',
            'bodies' => 'required|max:1000',
            'genres_id' => 'required|integer',
        ];
    }
     public function messages()
    {
        return [
            'title.required' => '名前を入力してください',
            'title.max' => '名前は40文字以内で入力してください',
            'bodies.required' => 'メッセージを入力してください',
            'bodies.max' => 'メッセージは1000文字以内で入力してください',
            'genres_id.required' => 'ジャンルを選択してください',
            'genres_id.integer' => 'ジャンルの入力形式が不正です',
        ];
    }
}
