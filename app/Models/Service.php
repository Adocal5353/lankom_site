<?php

namespace App\Models;

use App\Models\Page;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Orchid\Screen\AsSource;

class Service extends Model
{

    use HasFactory,AsSource;
    protected $fillable=[
        'name',
        'font_awesome',
        'lottie_path',
        'index'
    ];
    public function Page(){
        return $this->hasOne(Page::class);
    }
}
