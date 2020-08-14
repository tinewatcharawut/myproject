<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Covid19 extends Model
{
    //ชื่อตารางในฐานข้อมูล
    protected $table = "covid19s";
    //ชื่อคอลัมน์ในฐานข้อมูลที่อนุญาติให้แก้ไขข้อมูล
    protected $fillable = ["date","country","total","active","death","recovered","total_in_1m","remark"];    
    //Primary Key
 	protected $primaryKey = "id";

}
