<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('assets', function (Blueprint $table) {
            $table->string('empid')->nullable();
            $table->string('username')->nullable();
            $table->string('mail_id')->nullable();
            $table->string('department')->nullable();
            
        });
    }

    public function down()
    {
        Schema::table('assets', function (Blueprint $table) {
            $table->dropColumn(['empid','username','mail_id','department']);
        });
    }
};
