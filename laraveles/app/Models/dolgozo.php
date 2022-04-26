<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class dolgozo extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function jovahagy(){
        $alkalmazott = alkalmazott::findOrFail($this->alkalmazott_id);
        $alkalmazott->allapot = "1";
        $alkalmazott->save();
    }
    
 
}
