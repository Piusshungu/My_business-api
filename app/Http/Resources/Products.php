<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Products extends JsonResource
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
            'id' => $this->id,
            'name_of_product' => $this->name_of_product,
            'category' => $this->category,
            'country' => $this->country,
            'number_of_products' => (int) $this->number_of_products,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

        ];
        return parent::toArray($request);
    }
}
