<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model{
    use HasFactory;
    protected $table = 'job_listings';

    protected $guarded = [];
//    protected $fillable = ['employer_id','title','salary'];

    public function Employer()
    {
        return $this->belongsTo(Employer::class);

    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listing_id");
    }

}
















//
//public static function fetAll():array
//{
//    return [
//        [
//            'id'=>1,
//            'title' => 'Director',
//            'salary'=> '$40000',
//
//        ],
//        [
//            'id'=>2,
//            'title' => 'Programmer',
//            'salary'=> '$60000',
//
//        ],
//        [
//            'id'=>3,
//            'title' => 'Doctor',
//            'salary'=> '$65000',
//
//        ]
//    ];
//}
//public static function find(int $id):array
//{
//    $job = Arr::first(Job::fetAll(), fn($job) => $job['id'] == $id);
//    if (!$job) {
//        abort(404);
//    }
//    return $job;
//}
