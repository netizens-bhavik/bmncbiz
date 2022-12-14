<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainVisitorsTrafficSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domain_visitors_traffic_sources', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->nullable()->constrained('projects');
            $table->foreignId('domain_id')->nullable()->constrained('domains');
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->foreignId('similar_web_report_id')->nullable()->constrained('similar_web_reports');
            $table->enum('source', ['Direct', 'Referrals', 'Search', 'Social', 'Email', 'Mail', 'Display', 'Paid Search', 'Organic Search', 'Paid Social', 'Organic Social', 'Paid Display', 'Organic Display', 'Paid Email', 'Organic Email', 'Paid Referrals', 'Organic Referrals', 'Paid Direct', 'Organic Direct'])->nullable();
            $table->integer('visits_share')->nullable();
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
        Schema::dropIfExists('domain_visitors_traffic_sources');
    }
}
