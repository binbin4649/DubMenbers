<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateDubMenMessages extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('dub_men_messages');
        $table->addColumn('mypage_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('user_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
        ]);
        $table->addColumn('status', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('type', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('contact_address', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
        ]);
        $table->addColumn('title', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('body', 'text', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('submit_datetime', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('flash_datetime', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('read_datetime', 'datetime', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('is_error', 'boolean', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('is_flash', 'boolean', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('is_read', 'boolean', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addIndex(['mypage_id']);
        $table->addIndex(['user_id']);
        $table->create();
    }
}
