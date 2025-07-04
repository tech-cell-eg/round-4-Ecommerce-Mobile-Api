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
            'id'       => $this->id,
            'name'     => $this->name,
            'price'    => $this->price,
            'category' => $this->category?->name,
            'description' => $this->description,
            'quantity'    => $this->quantity,
            'category_id' => $this->category_id,
            'image' => $this->image ? asset('storage/' . $this->image) : null,
            'ingredients' => json_decode($this->ingredients) ?? [],
        ];
    }
}
