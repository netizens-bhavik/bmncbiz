<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManageApisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manage_apis', function (Blueprint $table) {
            $table->id();
            $table->string('api_name')->nullable();
            $table->string('api_url')->nullable();
            $table->string('api_key')->nullable();
            $table->string('api_client_id')->nullable();
            $table->string('api_secret_key')->nullable();
            $table->string('api_username')->nullable();
            $table->string('api_password')->nullable();
            $table->string('api_token')->nullable();
            $table->string('api_type')->nullable();
            $table->string('api_status')->nullable();

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
        Schema::dropIfExists('manage_apis');
    }
}
