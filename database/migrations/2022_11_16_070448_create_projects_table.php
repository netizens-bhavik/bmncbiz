<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique()->nullable();
            $table->text('description')->nullable();
            $table->string('project_code')->unique()->nullable();
            $table->enum('project_work_type', ['internal', 'external'])->default('external')->nullable();
            $table->enum('project_type', ['website','marketing','application','other'])->default('website')->nullable();
            $table->string('project_website_url')->nullable();
            $table->enum('project_status', ['active', 'inactive'])->default('active')->nullable();
            $table->foreignId('user_id','user_id')->nullable()->constrained('users');
            $table->boolean('is_deleted')->default(0);
            $table->foreignId('created_by', 'created_by')->nullable()->constrained('users');
            $table->foreignId('updated_by', 'updated_by')->nullable()->constrained('users');
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
        Schema::dropIfExists('projects');
    }
}
