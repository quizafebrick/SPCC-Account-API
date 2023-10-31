<?php

use App\Models\Section;
use App\Models\Semester;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student_no');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('email_address');
            $table->foreignIdFor(Section::class);
            $table->foreignIdFor(Semester::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
