<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'id' => $this->resource->getRouteKey(),
            'name' => $this->resource->name,
            'email' => $this->resource->email,
            'role' => $this->resource->role,
        ];
    }
}
