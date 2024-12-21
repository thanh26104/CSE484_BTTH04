<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Borrow extends Model
{
    use HasFactory;
    protected $fillable = [
        'book_id',
        'reader_id',
        'borrow_date',
        'return_date',
        'status',
    ];
    public function setBorrowDateAttribute($value)
    {
        $this->attributes['status'] = $value === 'returned' ? 1 : 0;
    }
    public function book()
    {
        return $this ->belongsTo(Book::class, 'book_id');
    }
    public function reader()
    {
        return $this ->belongsTo(Reader::class);
    }
}
