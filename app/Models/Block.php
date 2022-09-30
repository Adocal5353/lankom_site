<?php

namespace App\Models;

use App\Models\Page;
use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Orchid\Screen\AsSource;

class Block extends Model
{
    use AsSource;
    protected $fillable = [
        'title',
        'content',
        'order'
    ];
    use HasFactory;

    public function Images(){
        return $this->hasMany(Image::class);
    }

    public function Page(){
        return $this->belongsTo(Page::class);
    }
}
