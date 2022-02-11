<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
{
    
    public function authorize(){
      
        return true;
    }

   
    public function rules(){
        return [
            'title' => 'string|min:2|max:100',
            'body'=>'string',
            'category' => 'string'
        ];
    }
}
