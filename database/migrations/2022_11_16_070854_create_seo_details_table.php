<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeoDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seo_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('domain_id')->nullable()->constrained('domains');
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('content_type')->nullable();
            $table->text('canonical_url')->nullable();
            $table->text('viewport')->nullable();
            $table->text('author')->nullable();
            $table->text('image')->nullable();

            $table->boolean('is_og')->default(0);
            $table->text('og_site_name')->nullable();
            $table->text('og_type')->nullable();
            $table->text('og_url')->nullable();
            $table->text('og_title')->nullable();
            $table->text('og_description')->nullable();
            $table->text('og_image')->nullable();

            $table->boolean('is_twitter')->default(0);
            $table->text('twitter_card')->nullable();
            $table->text('twitter_title')->nullable();
            $table->text('twitter_description')->nullable();
            $table->text('twitter_url')->nullable();
            $table->text('twitter_image')->nullable();

            $table->longText('h1')->nullable();
            $table->longText('h2')->nullable();
            $table->longText('h3')->nullable();
            $table->longText('h4')->nullable();
            $table->longText('h5')->nullable();
            $table->longText('h6')->nullable();

            $table->longText('links')->nullable();
            $table->longText('image_details')->nullable();
            $table->longText('page_outline')->nullable();
            $table->longText('content_keywords')->nullable();

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
        Schema::dropIfExists('seo_details');
    }
}
