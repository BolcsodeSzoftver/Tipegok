<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dolgozo extends Model
{
    use HasFactory;
    public function jovahagy(){
        $alkalmazott = alkalmazott::findOrFail($this->alkalmazott_id);
        $alkalmazott->allapot = "1";
        $alkalmazott->save();
    }
 
}
