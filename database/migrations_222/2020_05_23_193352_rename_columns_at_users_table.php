<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameColumnsAtUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('nombre','name');
            $table->renameColumn('apellido_paterno','first_surname');
            $table->renameColumn('apellido_materno','last_surname');
            $table->renameColumn('telefono','phone');
            $table->renameColumn('cargo','charge');
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
            $table->renameColumn('name','nombre');
            $table->renameColumn('first_surname','apellido_paterno');
            $table->renameColumn('last_surname','apellido_materno');
            $table->renameColumn('phone','telefono');
            $table->renameColumn('charge','cargo');
        });
    }
}
