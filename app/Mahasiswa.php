<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //protected untuk menghapus jamak s yang berada diblakang nama class untuk db
    protected $table = 'mahasiswa';
}
