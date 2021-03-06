<?php
use Migrations\AbstractMigration;

class CreateArticlesIcons extends AbstractMigration
{

    public $autoId = false;

    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('articles_icons');
        $table->addColumn('id', 'uuid', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('article_id', 'uuid', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('icon_id', 'uuid', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addIndex([
            'article_id',
        ], [
            'name' => 'BY_ARTICLE_ID',
            'unique' => false,
        ]);
        $table->addIndex([
            'icon_id',
        ], [
            'name' => 'BY_ICON_ID',
            'unique' => false,
        ]);
        $table->addPrimaryKey([
            'id',
        ]);
        $table->create();
    }
}
