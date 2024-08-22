<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostDetailResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'title'         => $this->title,
            'slug'          => $this->slug,
            'content'       => $this->news_content,
            'author'        => [
                'username'  => $this->user->username,
                'email'     => $this->user->email,
            ],
            'date'          => $this->created_at
        ];
    }
}
