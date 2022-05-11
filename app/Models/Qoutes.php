<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Backpack\CRUD\app\Models\Traits\CrudTrait;

class Qoutes extends Model
{
    use CrudTrait;

    protected $fillable = [
        'name',
        'quotes',
    ];

    protected $table = 'qoutes';
    
    protected $guarded = ['id'];


    public static function getQoutes($search_keyword) {
        $users = DB::table('qoutes');

        if($search_keyword && !empty($search_keyword)) {
            $users->where(function($q) use ($search_keyword) {
                $q->where('qoutes.name', 'like', "%{$search_keyword}%")
                ->orWhere('qoutes.quotes', 'like', "%{$search_keyword}%");
            });
        }

        return $users->paginate(5);
    }

    public function getQouteBasicInfo(): array
    {
        $data = array();
        $data['id'] = $this->id;
        $data['name'] = $this->name;
        $data['quotes'] = $this->quotes;

        return $data;
    }
}
