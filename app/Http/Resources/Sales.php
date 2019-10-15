<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Sales extends JsonResource
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
            'product_name' => $this->product_name,
            'number_of_product' =>$this->number_of_product,
            'product_category' => $this->product_category,
            'total_amount' => $this->total_amount,
            'date_of_sales' =>$this->date_of_sales,
        ];
        return parent::toArray($request);
    }
}
