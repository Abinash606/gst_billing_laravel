<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Party extends Model
{
    use HasFactory;
    // Table Name
    protected $table = 'parties';

    // Primary Key
    protected $primary_Key = 'id';

    // Fillable Column
    protected $fillable = array('party_type','full_name','phone_no','address','account_holder_name','account_no','bank_name','ifsc_code','branch_address');

}
