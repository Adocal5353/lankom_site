<?php

namespace App\Models;

use App\Models\Block;
use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Page extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'link',
        'site_id',
    ];

    public function block(){
        return $this->hasMany(Block::class);
    }
    public function service(){
        return $this->belongsTo(Service::class,foreignKey:'index');
    }
}
