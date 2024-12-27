<?php

use App\JobType;
use App\RepresentativeRoles;
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
        Schema::create('representatives', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone',15)->nullable();
            $table->string('address', 100);
            $table->boolean('is_active')->default(true);
            $table->string('job_type')->default(JobType::FullTime);
            $table->string('role')->default(RepresentativeRoles::CustomerService);
            $table->foreignId('branch_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('representatives');
    }
};
