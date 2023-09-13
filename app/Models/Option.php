<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Option extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'section_id',
    ];

    /**
     * Get the section associated with the Option
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function section(): HasOne
    {
        return $this->hasOne(Section::class, 'id', 'section_id');
    }
}
