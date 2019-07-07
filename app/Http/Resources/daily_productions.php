<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class daily_productions extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' =>$this->id,
            'production_category' =>$this->production_category,
            'product_name' =>$this->product_name,
            'number_of_products' =>$this->number_of_products,
            'production_date' =>$this->production_date
        ];
        return parent::toArray($request);
    }
}
