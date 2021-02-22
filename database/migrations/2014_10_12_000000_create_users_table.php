<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('disability')->nullable();
            $table->string('country')->nullable();
            $table->string('location')->nullable();
            $table->string('email')->nullable();
            $table->string('social_media')->nullable();
            $table->string('spoken_languages')->nullable();
            $table->string('written_languages')->nullable();
            $table->string('club_name')->nullable();
            $table->string('team')->nullable();
            $table->string('main_club_contact')->nullable();
            $table->string('main_club_contact_email')->nullable();
            $table->string('main_club_contact_phone')->nullable();
            $table->string('why_wish_to_join_empal_scheme')->nullable();
            $table->string('what_hope_to_gain_from_empal_scheme')->nullable();
            $table->string('empal_preferred_nationality')->nullable();
            $table->string('empal_preferred_nationality_reason')->nullable();
            $table->string('empal_other_preferences')->nullable();
            $table->string('anything_else')->nullable();
            $table->string('dob')->nullable();
            $table->string('intresting_facts')->nullable();
            $table->string('hobbies_interests')->nullable();
            $table->string('fav_movies')->nullable();
            $table->string('fav_music')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->boolean('approved')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
