<?php

use App\Models\CurriculumSubject;
use App\Models\Semester;
use App\Models\YearLevel;
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
        Schema::create('course_subjects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignIdFor(CurriculumSubject::class);
            $table->foreignIdFor(Semester::class);
            $table->foreignIdFor(YearLevel::class);
            $table->string('pre_requisite')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_subjects');
    }
};
