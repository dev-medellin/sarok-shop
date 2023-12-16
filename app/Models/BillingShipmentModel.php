<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillingShipmentModel extends Model
{
    use HasFactory;

    public $table = 'billing_shipment';
    public $fillable = ['user_id','fname','lname','house_number','apartment','town_city','post_code','phone_contact','email','notes','payment'];
}
