<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('cargo')->nullable();
            $table->float('salario')->nullable();
            $table->string('telefone')->nullable();
            $table->date('data_nascimento')->nullable();
            $table->bigInteger('role_id')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('cargo');
            $table->dropColumn('salario');
            $table->dropColumn('telefone');
            $table->dropColumn('data_nascimento');
            $table->dropColumn('role_id');
        });
    }
}
