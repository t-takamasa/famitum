<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ArticleCategory;
use App\Traits\SeedingFromCsv;

class ArticleCategoryTableSeeder extends Seeder
{

  use SeedingFromCsv;
  private $table = "article_categories";
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {

    $model = new ArticleCategory();
    DB::statement('TRUNCATE TABLE ' . $this->table . ';');
    DB::statement('ALTER TABLE ' . $this->table . ' AUTO_INCREMENT = 1;');
    $this->insertFromCsv($this->table, $model, $this);
  }
}
