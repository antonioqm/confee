<?php
/**
 * Created by PhpStorm.
 * User: AntonioQM
 * Date: 05/03/17
 * Time: 12:57
 */

namespace App\Domains\Users\Providers;


use App\Domains\Users\Database\Migrations\CreatePasswordResetsTable;
use App\Domains\Users\Database\Migrations\CreateUsersTable;
use Illuminate\Support\ServiceProvider;
use Migrator\MigratorTrait as HasMigrations;

class DomainsServiceProvider extends ServiceProvider{

    use HasMigrations;


    public function register(){
        $this->registerMigrations();
    }

    protected function registerMigrations()
    {
        $this->migrations([
            CreateUsersTable::class,
            CreatePasswordResetsTable::class,
        ]);
    }



}