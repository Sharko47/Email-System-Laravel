<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactList extends Model
{
    protected $fillable = ['user_id', 'contact_email'];
}
