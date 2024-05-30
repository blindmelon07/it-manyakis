<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'quantity', 'series_number', 'branch_id', 'status'];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function ticketAssignments()
    {
        return $this->hasMany(Ticket_Asignment::class);
    }

}
