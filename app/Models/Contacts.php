<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'c_email','c_content'
    ];
    protected $primaryKey = 'c_id';
    protected $table = 'tbl_contacts';
}
