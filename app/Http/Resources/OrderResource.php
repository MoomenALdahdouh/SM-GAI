<?php

namespace App\Http\Resources;

use App\Http\Controllers\Api\OrderController;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;
use function url;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        if ($this->status == 'PENDING') {
            $data_driver = [];
            foreach ($this->order_request as $item) {
                $data_driver[] = $item->drivers_data();
            }
        }
        $data = [
            "id" => $this->id,
            "date" => $this->date,
            "time" => $this->time,
            "estimated_price" => $this->estimated_price,
            "details" => $this->details,
            "status" => $this->status,
            "type" => [
                'id' => $this->type->id,
                'title' => $this->type->title,
                'details' => $this->type->details,
                'image' => url('storage/' . $this->type->image),
            ],
            "to_address" => $this->to_address,
            "from_address" => $this->from_address,
        ];
        if ($this->status == 'PENDING' && OrderController::$_TYPE == 'CUSTOMER') {
            $data['order_requests'] = $data_driver;
        } else {
            if (OrderController::$_TYPE == 'CUSTOMER') {
                if ($this->order_request_accept)
                $data['order_requests'] =  [
                    $this->order_request_accept->drivers_data()
                ];
            }
            else {
                $data['customer'] = [
                    "id" => $this->customer->id,
                    "name" => $this->customer->name,
                    "email" => $this->customer->email,
                    "phone_number" => $this->customer->phone_number,
                    "fcm" => $this->customer->fcm,
                    "image" => $this->customer->image != null ? url('storage/' . $this->customer->image) : null,
                    "status" => $this->customer->status,
                ];
            }
        }
        return $data;
    }


}
