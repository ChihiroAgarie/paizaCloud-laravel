// database/migrations/2021_09_23_130915_create_tweets_table.php

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTweetsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('tweets', function (Blueprint $table) {
      $table->id();
      // 🔽 ここから追加
      $table->string('tweet');
      $table->text('description')->nullable();
      // 🔼 ここまで追加
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
    Schema::dropIfExists('tweets');
  }
}

