<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class ClassesResource extends JsonResource
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
            'id'=> (string)$this->id,
            'title' => $this->name,
            'description' => $this->description,
            'status' => $this->status,
            'teacher' =>[
                'firstname' => $this->teacher->firstname,
                'lastname' => $this->teacher->lastname,
                'email' => $this->teacher->email,
                'avatar' => $this->teacher->avatar_url
            ]
        ];
    }
}
