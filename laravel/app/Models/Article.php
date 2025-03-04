<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function publish(): void
    {
        $this->update(['published' => true]);
    }

    public function unpublish(): void
    {
        $this->update(['published' => false]);
    }
}
