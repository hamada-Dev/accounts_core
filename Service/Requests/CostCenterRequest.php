<?php

namespace Service\Requests;
use Illuminate\Foundation\Http\FormRequest;

class CostCenterRequest extends FormRequest{
    public function rules(): array
    {
        return [
            // "id"          => "nullable,exists:cost_centers",
            'name'        => 'required',
            'description' => 'required',

        ];
    }

    public function data():array
    {
        $dataArray = array();
        $dataArray['name']       = $this->input('name');
        $dataArray['description'] = $this->input('description');

        return $dataArray;
    }
}
