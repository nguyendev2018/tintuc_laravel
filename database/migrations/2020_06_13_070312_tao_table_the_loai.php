<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TaoTableTheLoai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()  {
        Schema::table('theloai', function (Blueprint $table) {
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
        Schema::dropIfExists('theloai');
    }
}
