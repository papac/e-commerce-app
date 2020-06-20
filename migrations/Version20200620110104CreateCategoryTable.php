<?php

use Bow\Database\Migration\Migration;
use Bow\Database\Migration\SQLGenerator;

class Version20200620110104CreateCategoryTable extends Migration
{
    /**
     * Up Migration
     */
    public function up()
    {
        $this->create("categories", function (SQLGenerator $table) {
            $table->addIncrement('id');
            $table->addString('name');
            $table->addString('description');
            $table->addTimestamps();
        });
    }

    /**
     * Rollback migration
     */
    public function rollback()
    {
        $this->dropIfExists("categories");
    }
}
