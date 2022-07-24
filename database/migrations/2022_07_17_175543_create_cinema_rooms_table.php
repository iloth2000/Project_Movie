<?php

use App\Enums\CinemaRoomStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCinemaRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cinema_rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedInteger('number_of_row');
            $table->unsignedInteger('number_of_col');
            $table->unsignedInteger('capacity');
            $table->unsignedTinyInteger('status')->default(CinemaRoomStatus::Active);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cinema_rooms');
    }
}
