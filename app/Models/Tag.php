<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;


    public function jobs() { 
        return $this->belongsToMany(Job::class, table: 'job_tag', relatedPivotKey: 'job_listing_id', foreignPivotKey: 'tag_id');
    }
}
