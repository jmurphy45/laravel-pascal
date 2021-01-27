<?php
/**
 * Created by PhpStorm.
 * User: Jay Murphy
 * Date: 1/26/21
 * Time: 8:29 PM
 */

namespace Jmurphy\LaravelPascal\Tests\Models;


use Illuminate\Support\Str;

class TestPascal extends \Jmurphy\LaravelPascal\PascalModel
{
    protected $fillable = ['Pascal'];
    protected $appends = ['AddedPascal'];

    public function getTestPascalAttribute($value){
        return "TEST";
    }

    public function getAddedPascalAttribute($value){
        return "TEST";
    }

    public function setPascalAttribute($value){
        $this->attributes['Pascal'] = Str::upper($value);
    }
}
