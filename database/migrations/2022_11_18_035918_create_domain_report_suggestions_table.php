<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainReportSuggestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domain_report_suggestions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('domain_report_id')->nullable()->constrained('domain_reports');
            $table->string('category')->nullable();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->string('url')->nullable();
            $table->string('type')->nullable();
            $table->string('code')->nullable();
            $table->string('display_value')->nullable();
            $table->string('raw_value')->nullable();
            $table->string('snippet')->nullable();
            $table->longText('help')->nullable();
            $table->text('help_url')->nullable();
            $table->longText('details')->nullable();
            $table->string('items')->nullable();
            $table->longText('suggestions')->nullable();
            $table->text('warnings')->nullable();
            $table->text('errors')->nullable();
            $table->string('score')->nullable();
            $table->string('percentage_score')->nullable();

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
        Schema::dropIfExists('domain_report_suggestions');
    }
}
