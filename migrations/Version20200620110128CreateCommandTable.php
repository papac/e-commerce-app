<?php

use Bow\Database\Migration\Migration;
use Bow\Database\Migration\SQLGenerator;

class Version20200620110128CreateCommandTable extends Migration
{
    /**
     * Up Migration
     */
    public function up()
    {
        $this->create("commands", function (SQLGenerator $table) {
            $table->addIncrement('id');
            $table->addInteger('user_id');
            $table->addInteger('product_id');
            $table->addInteger('qte');
            $table->addForeign('product_id', [
                'table' => 'products',
                'references' => 'id',
                'on' => 'delete cascade'
            ]);
            $table->addForeign('user_id', [
                'table' => 'users',
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
        $this->dropIfExists("commands");
    }
}
