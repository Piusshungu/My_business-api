<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Orders extends JsonResource
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
            'order_name' =>$this->order_name,
            'order_date' => $this->order_date,
            'order_amount' => $this->order_amount,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at

        ];
        return parent::toArray($request);
    }
}
