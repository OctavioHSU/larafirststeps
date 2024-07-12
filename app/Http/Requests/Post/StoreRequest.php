<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    static public function myRules()
    {
        return [
            'title' => "required|min:5|max:500",
            'slug' => "required|min:5|max:500",
            'content' => "required|min:7",
            'category_id' => "required|integer",
            'description' => "required|min:7",
            'posted' => "required"
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return $this->myRules();
    }
}
