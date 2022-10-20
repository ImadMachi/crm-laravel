<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quote extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $with = ['customer'];

    public function quoteLines()
    {
        return $this->hasMany(QuoteLine::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'quote_lines')->withPivot('title', 'quantity', 'created_at');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
