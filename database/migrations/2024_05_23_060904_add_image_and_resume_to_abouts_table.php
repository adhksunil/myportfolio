<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('abouts', function (Blueprint $table) {
            if (!Schema::hasColumn('abouts', 'image')) {
                $table->string('image')->nullable();
            }
            if (!Schema::hasColumn('abouts', 'resume')) {
                $table->string('resume')->nullable();
            }
        });
    }

    public function down()
    {
        Schema::table('abouts', function (Blueprint $table) {
            if (Schema::hasColumn('abouts', 'image')) {
                $table->dropColumn('image');
            }
            if (Schema::hasColumn('abouts', 'resume')) {
                $table->dropColumn('resume');
            }
        });
    }
};
