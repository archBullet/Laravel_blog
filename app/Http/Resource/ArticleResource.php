<?php

namespace App\Http\Resource;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property int $id
 * @property string $title
 * @property string $author
 * @property string $brief
 * @property string $content
 */
class ArticleResource extends JsonResource
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return array<string, mixed>
     */
    public function toArray(\Illuminate\Http\Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'author' => $this->author,
            'brief' => $this->brief,
            'content' => $this->content
        ];
    }
}
