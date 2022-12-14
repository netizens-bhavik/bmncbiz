<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainVisitorsTopCountrySharesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domain_visitors_top_country_shares', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->nullable()->constrained('projects');
            $table->foreignId('domain_id')->nullable()->constrained('domains');
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->foreignId('similar_web_report_id')->nullable()->constrained('similar_web_reports');
            $table->foreignId('country_id', 'country_id')->nullable()->constrained('countries');
            $table->float('share')->nullable();
            $table->enum('month', ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'])->nullable();
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
        Schema::dropIfExists('domain_visitors_top_country_shares');
    }
}
