<?php declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            // シーダー実行前に全テーブルをトランケート
            TruncateAllTables::class,

            // db:seeder実行時に以下のSeederを実行
            //UserSeeder::class,
        ]);
    }
}
