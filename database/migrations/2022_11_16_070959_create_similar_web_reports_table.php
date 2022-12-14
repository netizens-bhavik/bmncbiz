<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimilarWebReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('similar_web_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('domain_id')->nullable()->constrained('domains');

            $table->string('domain')->nullable();
            $table->text('site_name')->nullable();
            $table->text('site_title')->nullable();
            $table->text('site_description')->nullable();
            $table->text('site_categories')->nullable();

            $table->string('global_rank')->nullable();
            $table->string('country_rank')->nullable();
            $table->foreignId('country_id', 'country_id')->nullable()->constrained('countries');

            $table->boolean('is_small')->nullable();

            $table->string('category_rank')->nullable();
            $table->string('category')->nullable();

            $table->longText('large_screenshot')->nullable();

            $table->enum('month', ['january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december'])->nullable();
            $table->integer('year')->nullable();

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
        Schema::dropIfExists('similar_web_reports');
    }
}
