<?php
/**
 * Created by PhpStorm.
 * User: Jay Murphy
 * Date: 1/26/21
 * Time: 8:27 PM
 */

namespace Jmurphy\LaravelPascal\Tests;


use Jmurphy\LaravelPascal\LaravelPascalServiceProvider;
use Jmurphy\LaravelPascal\Tests\Models\TestPascal;
use Orchestra\Testbench\TestCase;

class PascalModelTest extends TestCase
{
    private $testModel;

    protected function setUp(): void
    {
        parent::setUp();
        $this->testModel = new TestPascal(['Pascal' => null]);
    }

    protected function getPackageProviders($app)
    {
        return [LaravelPascalServiceProvider::class];
    }

    /** @test */
    public function get_pascal_attribute()
    {
        //dd($this->testModel);
        $this->assertEquals("TEST",$this->testModel->TestPascal);
    }

    /** @test */
    public function set_pascal_attribute()
    {
        $this->testModel->Pascal = 'test';
        $this->assertEquals("TEST",$this->testModel->Pascal);
    }
}
