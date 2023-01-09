<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;
use function url;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $data = [
            "id" => $this->id,
            "name" => $this->name,
            "email" => $this->email,
            "phone_number" => $this->phone_number,
            "fcm" => $this->fcm,
            "image" => $this->image != null ? url('storage/' . $this->image) : null,
            "status" => $this->status,
        ];

        if ($this->type == 'DRIVER') {
            $data['information_driver'] = [
                "id" => $this->information_driver->id,
                "license_type" => $this->information_driver->license_type,
                "license_number" => $this->information_driver->license_number,
                "is_commissioner" => $this->information_driver->is_commissioner,
                "certificate_precedents_Image" => url('storage/' . $this->information_driver->certificate_precedents_Image),
                "driving_license_image" => url('storage/' . $this->information_driver->driving_license_image),
                "driver_id_image" => url('storage/' . $this->information_driver->driver_id_image),
                "commissioner_image" => url('storage/' . $this->information_driver->commissioner_image),
                "insurance_image" => url('storage/' . $this->information_driver->insurance_image),
                "card_employment_image" => url('storage/' . $this->information_driver->card_employment_image),
                "card_number" => $this->information_driver->card_number,
            ];
            $data['vehicle'] = [
                "id" => $this->information_driver->id,
                "vehicles_driving_license_image" => url('storage/' . $this->vehicle->vehicles_driving_license_image),
                "technical_inspection_image" => url('storage/' . $this->vehicle->technical_inspection_image),
            ];
        }

        if ($this->city)
            $data['city'] = [
                'id' => $this->city->id,
                'name' => $this->city->name,
            ];

        return $data;
    }
}
