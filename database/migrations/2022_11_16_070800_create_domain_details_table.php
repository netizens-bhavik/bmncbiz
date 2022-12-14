<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domain_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('domain_id')->nullable()->constrained('domains');
            $table->string('domain_authority')->nullable();
            $table->string('page_authority')->nullable();
            $table->string('total_backlinks')->nullable();
            $table->string('spam_score')->nullable();
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
        Schema::dropIfExists('domain_details');
    }
}
