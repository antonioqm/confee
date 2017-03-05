<?php
/**
 * Created by PhpStorm.
 * User: AntonioQM
 * Date: 05/03/17
 * Time: 12:22
 */

namespace App\support\Database;

use Illuminate\Database\Migrations\Migration as LaravelMigration;


abstract class Migration extends LaravelMigration
{
    /**
     * @var \Illuminate\Database\Schema\Builder;
     */

    protected $schema;

    public function __construct()
    {
        $this->schema = app('db')->connection()->getSchemaBuilder();

    }

    abstract function up();

    abstract function down();


}