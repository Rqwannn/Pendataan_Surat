<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id_user' => $this->id_user,
            'name' => $this->name,
            'username' => $this->username,
            'role' => $this->role,
        ];
    }
}
