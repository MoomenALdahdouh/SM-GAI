<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;
use function url;

class ComplaintResource extends JsonResource
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
                "id"=>$this->id,
                "complaint_details"=>$this->complaint_details,
                "is_reply"=>boolval($this->is_reply),
                "reply_details"=>$this->reply_details,
            ];
    }
}
