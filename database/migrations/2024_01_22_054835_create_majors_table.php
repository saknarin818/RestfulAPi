<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('majors', function (Blueprint $table) {
            $table->id('major_id');
            $table->string('name',50)->nullable(false);
            $table->string('name_en',50 )->nullable(false);
            $table->timestamps();

        });

        $test = DB::table('majors')->insert([
                [
                    'name'=>'บอล',
                    'name_en'=>'ball',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name'=>'ไทย',
                    'name_en'=>'thai',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name'=>'จีน',
                    'name_en'=>'chinese',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name'=>'เกาหลี',
                    'name_en'=>'korea',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name'=>'อังกฤษ',
                    'name_en'=>'english',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('majors');
    }
};
