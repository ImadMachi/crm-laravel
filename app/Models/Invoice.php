<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $with = ['customer'];

    public function invoiceLines()
    {
        return $this->hasMany(InvoiceLine::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'invoice_lines')->withPivot('title', 'quantity', 'created_at');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
