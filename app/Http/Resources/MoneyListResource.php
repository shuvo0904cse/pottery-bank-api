<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MoneyListResource extends JsonResource
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
            "id"            => $this['id'],
            "category"      => $this['category_id'],
            "category_title"=> CategoryListResource::make($this['category']), 
            "amount"        => $this['amount'],
            "title"         => $this['title'],
            "note"          => $this['note'],
            "created_at"    => $this['created_at'],
            "updated_at"    => $this['updated_at']
        ];
    }
}
