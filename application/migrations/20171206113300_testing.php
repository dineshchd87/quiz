<?php

class Migration_testing extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(
                array(
                    'id' => array(
                        'type' => 'INT',
                        'constraint' => 5,
                        'unsigned' => true,
                        'auto_increment' => true
                    ),
                    'name' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '100',
                    ),
                    'email' => array(
                        'type' => 'TEXT',
                        'null' => true,
                    ),
                )
        );

        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('migration_testing');
    }

    public function down() {
        $this->dbforge->drop_table('migration_testing');
    }

}
