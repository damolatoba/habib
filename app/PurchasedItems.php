<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchasedItems extends Model
{
    //
    protected $fillable = [
        'transaction_id', 'product_id', 'single_cost', 'quantity', 'total_cost',
    ];

    protected $table = 'purchased_items';
}
