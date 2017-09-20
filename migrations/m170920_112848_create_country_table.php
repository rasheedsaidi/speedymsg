<?php

use yii\db\Migration;

/**
 * Handles the creation of table `country`.
 */
class m170920_112848_create_country_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('country', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'abbreviation' => $this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('country');
    }
}
