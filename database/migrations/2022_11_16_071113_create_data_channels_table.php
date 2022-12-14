<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataChannelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_channels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('domain_id')->nullable()->constrained('domains');
            $table->foreignId('project_id')->nullable()->constrained('projects');
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->enum('channel',['google_analytics','google_search_console','bing_webmaster','facebook_insights','google_my_business','facebook_social','twitter_social','linkedin_social','instagram_social','pinterest_social'])->comment('google_analytics,google_search_console,bing_webmaster,facebook_insights,google_my_business,facebook_social,twitter_social,linkedin_social,instagram_social,pinterest_social')->nullable();
            $table->string('channel_id')->nullable();
            $table->string('channel_name')->nullable();
            $table->string('channel_email')->nullable();
            $table->string('channel_password')->nullable();
            $table->string('channel_token')->nullable();
            $table->string('channel_refresh_token')->nullable();
            $table->string('channel_secret')->nullable();
            $table->string('channel_key')->nullable();
            $table->string('channel_username')->nullable();
            $table->string('channel_status')->nullable();
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
        Schema::dropIfExists('data_channels');
    }
}
