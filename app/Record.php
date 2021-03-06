<?php

namespace App;
use App\User; // 追加
use App\Patient; // 追加 

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $fillable = [
        'user_id', 
        'patient_id', 
        'date',
        'content', 
        'image', 
    ];
    
    /**
     * 相談記録を所有する利用者。（Patientモデルとの多対1の関係を定義）
     */ 
    public function patient(){
        return $this->belongsTo(Patient::class);
    }
    
    /**
     * 相談記録を所有する(記入した)職員。（Userモデルとの多対1の関係を定義）
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
