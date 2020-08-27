<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
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
            'data' => [
                'id' => $this->id,
                'title' => $this->title,
                'body' => $this->body
            ],
            'Detail' => [
                'Created at' => $this->created_at,
                'Updated at' => $this->updated_at,
            ],
        ];
    }

    /**
     * Addition information when sending data
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function with($request)
    {
        return [
            'version' => "1.0.0",
            'author' => "me"
        ];
    }


}
