<?php
//namespace Abcflorida\Bctown\Models;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site', function (Blueprint $table) {
            $table->increments('site_id');
            //$table->string('name');
            $table->string('sitename',50);
            $table->string('domainname',50);
            $table->boolean('isssl')->default(0);
            $table->boolean('isactive')->default(1);
            $table->boolean('hasBlog')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sites');
    }
}
