<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Tenstar extends JsonResource
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
            'info' => [
                'id' => $this->id,
                'faction' => $this->faction,
                'name' => $this->name,
                'class' => $this->class,
            ],
            'skill' => [
                'skill1' => $this->skill1,
                'skill2' => $this->skill2,
                'skill3' => $this->skill3,
                'skill4' => $this->skill4,
            ],
            'stat' => [
                'hp' => $this->hp,
                'atk' => $this->atk,
                'armor' => $this->armor,
                'speed' => $this->speed,
                'aoe' => $this->aoe,
                'cc' => $this->cc,
                'heal' => $this->heal,
            ],
            'avatar' => $this->avatar,
            'img' => $this->img,
            'user_id' => $this->user_id,
        ];
    }

    /**
     * Addition information when sending single data
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function with($request)
    {
        return [
            'more' => [
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
            ]
        ];
    }
}