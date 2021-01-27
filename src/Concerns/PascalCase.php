<?php
/**
 * Created by PhpStorm.
 * User: Jay Murphy
 * Date: 1/26/21
 * Time: 8:01 PM
 */

namespace Jmurphy\LaravelPascal\Concerns;

use Illuminate\Support\Str;

trait PascalCase
{
    use TransformableKeys;

    protected function keyTransform($key)
    {
        return ucfirst(Str::camel($key));
    }
}
