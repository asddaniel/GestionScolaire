<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Promotion extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'option_id',
        'section_id'
    ];

    /**
     * Get the section associated with the Promotion
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function section(): HasOne
    {
        return $this->hasOne(Section::class, 'id', 'section_id');
    }
    /**
     * Get the option associated with the Promotion
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function option(): HasOne
    {
        return $this->hasOne(Option::class, 'id', 'option_id');
    }
}
