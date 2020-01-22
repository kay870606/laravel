<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        //$this->call(CategoriesTableSeeder::class);
        //$this->call(SubcategoriesTableSeeder::class);
        //$this->call(BeaconsTableSeeder::class);
        $this->call(CategoryBeaconsTableSeeder::class);
        //$this->call(ActivitiesTableSeeder::class);
        //$this->call(CategoryActivitiesTableSeeder::class);
        //$this->call(ProductsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(KeywordsTableSeeder::class);

        $this->call(CustomizedActivitiesTableSeeder::class);
        $this->call(CustomizedBeaconsTableSeeder::class);
        $this->call(CustomizedCategoriesTableSeeder::class);
        $this->call(CustomizedCategoryActivitiesTableSeeder::class);
        $this->call(CustomizedProductsTableSeeder::class);
        $this->call(CustomizedSubcategoriesTableSeeder::class);
    }
}
