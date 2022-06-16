<?php

namespace App\Models;

use App\Scopes\FilterSearchScope;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory, FilterSearchScope;
    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'address', 'company_id'];


    public $filterColumns = ['company_id'];
    public $searchColumns = ['first_name', 'last_name', 'email', 'company.name', 'address'];

    public function company(){
        return $this->belongsTo(Company::class);
    }




    public function scopeLatestFirst($query){
        return $query->orderBy('id', 'desc');
    }


 

}
