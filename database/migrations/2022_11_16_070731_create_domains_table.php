<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domains', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique()->nullable();
            $table->string('url')->unique()->nullable();
            $table->string('protocol')->nullable();
            $table->string('domain')->unique()->nullable();
            $table->string('subdomain')->nullable();
            $table->string('tld')->unique()->nullable();
            $table->foreignId('project_id')->nullable()->constrained('projects');
            $table->foreignId('user_id')->nullable()->constrained('users');
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
        Schema::dropIfExists('domains');
    }
}
