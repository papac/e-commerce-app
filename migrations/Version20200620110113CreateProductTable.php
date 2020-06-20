<?php

use Bow\Database\Migration\Migration;
use Bow\Database\Migration\SQLGenerator;

class Version20200620110113CreateProductTable extends Migration
{
    /**
     * Up Migration
     */
    public function up()
    {
        $this->create("products", function (SQLGenerator $table) {
            $table->addIncrement('id');
            $table->addString('name');
            $table->addString('image');
            $table->addFloat('price');
            $table->addInteger('stock', ['default' => 10]);
            $table->addText('description');
            $table->addInteger('category_id');
            $table->addForeign('category_id', [
                'table' => 'categories',
                'references' => 'id',
                'on' => 'delete cascade'
            ]);
            $table->addTimestamps();
        });
    }

    /**
     * Rollback migration
     */
    public function rollback()
    {
        $this->dropIfExists("products");
    }
}
