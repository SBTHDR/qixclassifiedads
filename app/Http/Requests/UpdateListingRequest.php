<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateListingRequest extends FormRequest
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
            'category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'price_negotiable' => 'required',
            'condition' => 'required',
            'location' => 'required',
            'country_id' => 'required',
            'phone_number' => 'required',
            'is_published' => 'required',
            'featured_image' => 'image',
            'image_one' => 'image',
            'image_two' => 'image',
            'image_three' => 'image',
        ];
    }
}
