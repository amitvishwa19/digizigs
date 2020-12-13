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
            // 'meta' =>[
            //     'version' => '1.0.0',
            //     'author_url' => 'www.digizigs.com'
            // ]
        ];
    }
}
