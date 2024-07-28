<?php

require __DIR__ . '/vendor/autoload.php';
use \RedBeanPHP\R as R;


class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $link = R::dispense('links');
            $link->short = "t.ly/xxx";
            $link->long = "https://";
            $link->phone = '';
            $link->message = '';
            $link->status = '';
            $link->taken_at = date('Y-m-d H:i:s');
            $link->sent_at = date('Y-m-d H:i:s');
            $link->delivered_at = date('Y-m-d H:i:s');
            $link->visit_at = date('Y-m-d H:i:s');
            $link->error = '';
            $link->hits = 0;
            $id = R::store($link);
            R::close();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}











