<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domain_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->nullable()->constrained('projects');
            $table->foreignId('domain_id')->nullable()->constrained('domains');
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->string('domain')->nullable();
            $table->string('tld')->nullable();

            $table->text('site_title')->nullable();
            $table->text('site_description')->nullable();
            $table->text('actual_site_url')->nullable();

            $table->enum('device', ['desktop', 'mobile'])->nullable();

            $table->string('fcp_time')->nullable();
            $table->string('fcp_score')->nullable();

            $table->string('si_time')->nullable();
            $table->string('si_score')->nullable();

            $table->string('tti_time')->nullable();
            $table->string('tti_score')->nullable();

            $table->string('fmp_time')->nullable();
            $table->string('fmp_score')->nullable();

            $table->string('lcp_time')->nullable();
            $table->string('lcp_score')->nullable();

            $table->string('tbt_time')->nullable();
            $table->string('tbt_score')->nullable();

            $table->string('cls')->nullable();
            $table->string('cls_score')->nullable();

            $table->string('performance_score')->nullable();
            $table->string('percentage_performance_score')->nullable();

            $table->string('accessibility_score')->nullable();
            $table->string('percentage_accessibility_score')->nullable();

            $table->string('best_practices_score')->nullable();
            $table->string('percentage_best_practices_score')->nullable();

            $table->string('seo_score')->nullable();
            $table->string('percentage_seo_score')->nullable();

            $table->string('pwa_score')->nullable();
            $table->string('percentage_pwa_score')->nullable();

            $table->string('total_score')->nullable();
            $table->string('percentage_total_score')->nullable();

            $table->longText('screenshot')->nullable();

            $table->date('report_date')->nullable();

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
        Schema::dropIfExists('domain_reports');
    }
}
