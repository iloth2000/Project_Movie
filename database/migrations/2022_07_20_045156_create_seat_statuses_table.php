<?php

use App\Enums\SeatStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeatStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seat_statuses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('seat_id')->constrained();
            $table->foreignId('movie_schedule_id')->constrained();
            $table->unsignedTinyInteger('status')->default(SeatStatus::Available);
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
        Schema::dropIfExists('seat_statuses');
    }
}
