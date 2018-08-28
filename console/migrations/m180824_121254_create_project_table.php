<?php

use yii\db\Migration;

/**
 * Handles the creation of table `project`.
 */
class m180824_121254_create_project_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('project', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'description' => $this->text()->notNull(),
            'created_by' => $this->integer()->notNull(),
            'updated_by' => $this->integer()->null(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->null()
        ]);

        $this->addForeignKey(
            'project-created_by',
            'project',
            'created_by',
            'user',
            'id'
        );
        $this->addForeignKey(
            'project-updated_by',
            'project',
            'updated_by',
            'user',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('project');
    }
}
