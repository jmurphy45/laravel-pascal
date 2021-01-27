<?php
/**
 * Created by PhpStorm.
 * User: Jay Murphy
 * Date: 1/26/21
 * Time: 8:23 PM
 */

namespace Jmurphy\LaravelPascal;

use Illuminate\Database\Eloquent\Model;
use Jmurphy\LaravelPascal\Concerns\PascalCase;

class PascalModel extends Model
{
    use PascalCase;
}
