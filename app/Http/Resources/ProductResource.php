<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $price = $this->price / 100,
            'price_formatted' => '$' . $price,
            'brand' => $this->brand,
            'weight' => $this->weight,
            'category' => CategoryResource::make($this->category),
        ];
    }
}