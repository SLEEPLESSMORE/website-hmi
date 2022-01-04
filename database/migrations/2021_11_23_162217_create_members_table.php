<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('alamat');
            $table->date('ttl');
            $table->string('fakultas');
            $table->string('univ');
            $table->string('lk1');
            $table->string('lok1');
            $table->string('lk2')->nullable();
            $table->string('lok2')->nullable();
            $table->string('sc')->nullable();
            $table->string('loksc')->nullable();
            $table->string('lk3')->nullable();
            $table->string('lok3')->nullable();
            $table->string('lkk')->nullable();
            $table->string('lok4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
