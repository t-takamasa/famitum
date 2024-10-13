<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ArticleCategorySearch;
use App\Traits\SeedingFromCsv;

class ArticleCategorySearchTableSeeder extends Seeder
{

  use SeedingFromCsv;
  private $table = "article_category_searches";
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {

    $model = new ArticleCategorySearch();
    DB::statement('TRUNCATE TABLE ' . $this->table . ';');
    DB::statement('ALTER TABLE ' . $this->table . ' AUTO_INCREMENT = 1;');
    $this->insertFromCsv($this->table, $model, $this);
  }
}
