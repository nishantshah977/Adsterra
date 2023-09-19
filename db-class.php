<?php
class Database {
    private $table_name;

    public function __construct() {
        global $wpdb;
        $this->table_name = $wpdb->prefix . '_adsterra';
    }

    public function createTable() {
        global $wpdb;
        $charset_collate = $wpdb->get_charset_collate();
        $sql = "CREATE TABLE {$this->table_name} (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            name text NOT NULL,
            value text NOT NULL,
            additional text NOT NULL,
            PRIMARY KEY (id)
        ) {$charset_collate};";
        
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        $result = dbDelta($sql);
        return $result;
    }

    public function insertOrUpdateData($data) {
        global $wpdb;
        $name = $data['name'];
        $value = $data['value'];
        $additional = $data['additional'];
        
        $existing_record = $wpdb->get_row("SELECT * FROM {$this->table_name} WHERE name = '{$name}'", ARRAY_A);

        if ($existing_record) {
            // If a matching record exists, update it
            $wpdb->update(
                $this->table_name,
                array(
                    'value' => $value,
                    'additional' => $additional
                ),
                array('id' => $existing_record['id'])
            );
            return $existing_record['id']; // Return the ID of the updated record
        } else {
            // If no matching record exists, insert a new one
            $wpdb->insert(
                $this->table_name,
                array(
                    'name' => $name,
                    'value' => $value,
                    'additional' => $additional
                )
            );
            return $wpdb->insert_id; // Return the ID of the newly inserted record
        }
    }

    public function getDataByName($name) {
    global $wpdb;
    return $wpdb->get_row($wpdb->prepare("SELECT * FROM {$this->table_name} WHERE name = %s", $name), ARRAY_A);
}

public function getTableName(){
        global $wpdb;
        return $wpdb->prefix . '_adsterra';
    }
    

}