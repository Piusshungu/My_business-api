<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Expenditures extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'id' =>$this->id,
            'expenditures_date' =>$this->expenditures_date,
            'expenditures_for' =>$this->expenditures_for,
            'expenditures_amount' =>$this->expenditures_amount,
        ];
        return parent::toArray($request);
    }
}
