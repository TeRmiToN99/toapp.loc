<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogArticleUpdateRequest extends FormRequest
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
            'title'         => 'required|min:3|max:200',
            'slug'          => 'max:200',
            'excerpt'       => 'max:500',
            'content_raw'   => 'required|string|max:10000|min:5',
            'category_id'   => 'required|integer|exists:blog_categories,id',
        ];
    }
    /**
     *  Get the array messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required'    =>  'Введите :title статьи',
            'content_raw.min'   =>  'Минимальная длина статьи [:min] символов',
        ];
    }

    /**
     *  Get custom attributes for validation errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'title' => 'Заголовок',
        ];
    }
}