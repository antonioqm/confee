<?php
/**
 * Created by PhpStorm.
 * User: AntonioQM
 * Date: 05/03/17
 * Time: 12:53
 */

namespace App\Domains\Users\Database\Migrations;


use App\support\Database\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePasswordResetsTable extends Migration
{
    public function up(){
        $this->schema->create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token')->index();
            $table->timestamp('created_at')->nullable();
        });
    }

    public  function down(){
        $this->schema->dropIfExists('password_resets');
    }

}