<?php

use yii\db\Migration;

/**
 * Handles the creation of table `task`.
 */
class m180824_115820_create_task_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('task', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->notNull(),
            'description' => $this->text()->notNull(),
            'estimation' => $this->integer()->notNull(),
            'executor_id' => $this->integer()->null(),
            'started_at' => $this->integer()->null(),
            'completed_at' => $this->integer()->null(),
            'created_by' => $this->integer()->notNull(),
            'updated_by' => $this->integer()->null(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->null(),
        ]);

        $this->addForeignKey(
            'task-executor',
            'task',
            'executor_id',
            'user',
            'id'
        );

        $this->addForeignKey(
            'task-created_by',
            'task',
            'created_by',
            'user',
            'id'
        );

        $this->addForeignKey(
            'task-updated_by',
            'task',
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
        $this->dropTable('task');
    }
}
