<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    protected $table= "posts";
    protected $fillable = [
    'title',
    'keyword',
    'description',
    'heading',
    'shortstory',
    'fullstory',
    'fimage',
    'category_id',
    'user_id',
    'status'
    ];
}