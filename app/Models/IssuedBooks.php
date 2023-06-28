<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Books;

class IssuedBooks extends Model
{
    use HasFactory;

    protected $table = 'tbl_issued_books';

    protected $fillable = [
        'id',
        'book_id',
        'user_id',
        'to_return',
        'is_return',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function book()
    {
        return $this->belongsTo(Books::class);
    }

}
