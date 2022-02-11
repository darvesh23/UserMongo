<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;


class StorePostRequest extends FormRequest
{
  
    public function authorize(){
  
        return true;
    }

  
    public function rules(){
        return [
            'title' => 'required|string|min:2|max:100',
            'body'=>'required|string|',
            'category' => 'required|string|'
        ];
    }
}
