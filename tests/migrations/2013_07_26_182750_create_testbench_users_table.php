<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;

class CreateTestbenchUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function ($table) {
            $table->increments('id');
            $table->string('email');
            $table->string('password');

            $table->timestamps();
        });

        $now = Carbon::now();

        DB::table('users')->insert([
            'email'      => 'hello@orchestraplatform.com',
            'password'   => Hash::make('123'),
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
