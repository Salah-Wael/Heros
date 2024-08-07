<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $results = [
            'id' => $this->id,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'fullName' => $this->fullName,
            'role' => $this->role,
            'email' => $this->email,
            'gender' => $this->gender,
        ];

        if(!auth()->user()?->currentAccessToken())
        {
            $results['token'] = $this->createToken($this->email)->plainTextToken;
        }

        return $results;
    }
}
