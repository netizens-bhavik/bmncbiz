<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeywordsReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keywords_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('domain_id')->nullable()->constrained('domains');
            $table->string('domain')->nullable();
            $table->text('keyword')->nullable();
            $table->foreignId('keyword_country_id')->nullable()->constrained('countries');
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
        Schema::dropIfExists('keywords_reports');
    }
}
