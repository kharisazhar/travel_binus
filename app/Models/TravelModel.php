<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name', 'email', 'password',
    ];
}

class Destination extends Model
{
    protected $fillable = [
        'name', 'description', 
    ];
}

class Accommodation extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 
    ];
}

class Transportation extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 
    ];
}

class Package extends Model
{
    protected $fillable = [
        'name', 'duration', 'destination_id', 'accommodation_id', 
        'transportation_id', 'participant_name', 'participant_email', 
        'participant_phone_number',
    ];
}

class PackageFee extends Model
{
    protected $fillable = [
        'package_id', 'amount'
    ];
}