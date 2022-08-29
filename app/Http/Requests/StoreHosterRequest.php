<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHosterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'equired|max:70', 
            'email' => 'required', 
            'mobile'=> 'required', 
            'profile_image' => 'required', 
            'social_links'=> 'required', 
            'address'=> 'required', 
            'about'=> 'required',
            'event_images'=> 'required',
        ];
    }
}
