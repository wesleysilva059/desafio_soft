<?php

namespace App\Http\Requests;

use App\Models\Book;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreBookRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'    => [
                'string',
                'required',
            ],
            'description' => [
                'string',
                'required',
            ],
            'author'   => [
                'string',
                'required',
            ],
            'number_page'   => [
                'integer',
                'required',
            ],
        ];
    }
}
