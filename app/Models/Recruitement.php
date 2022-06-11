<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Status;

class Recruitement extends Model
{
    use HasFactory;

    protected $fillable = ['first_name','last_name','position','experience','email','mobilenumber','linkedin_url','min_salary','max_salary','skills','cv','status_id'];

    public function scopeFilter($query, array $filters){
        if($filters['status'] ?? false){
            $query->where('status_id', request('status'));
        }

        if($filters['search'] ?? false){
            $query->where('first_name','like', '%'. request('search') . '%')
            ->orWhere('last_name','like', '%'. request('search') . '%')
            ->orWhere('skills','like', '%'. request('search') . '%')
            ->orWhere('position','like', '%'. request('search') . '%')
            ->orWhere('mobilenumber','like', '%'. request('search') . '%')
            ->orWhere('email','like', '%'. request('search') . '%');
        }
    }

        
    
}
