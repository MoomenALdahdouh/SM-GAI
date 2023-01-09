<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;
use function url;

class TypeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
            return [
                    'id'=>$this->id,
                    'title'=>$this->title,
                    'details'=>$this->details,
                    'image'=>url('storage/'.$this->image),
            ];
    }
}
