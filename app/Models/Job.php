<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use PhpParser\Node\Expr\Cast\Array_;

// class Job extends Model{
    
// }

class Job{

    public static function all(){
        $jobs = [
            ['id'=>1, 'title'=>'gamer', 'salary'=>0], 
            ['id'=>2, 'title'=>'programmer', 'salary'=>50000], 
            ['id'=>3, 'title'=>'worker', 'salary'=>28000]
        ];

        return $jobs;
    }

    public static function find(int $id): array{
        $jobs = [
            ['id'=>1, 'title'=>'gamer', 'salary'=>0], 
            ['id'=>2, 'title'=>'programmer', 'salary'=>50000], 
            ['id'=>3, 'title'=>'worker', 'salary'=>28000]
        ];
        $target = Arr::first($jobs, function($job) use ($id){
            return $job['id'] == $id;
        });

        return $target;
    }
}