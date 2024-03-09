<?php

namespace App\Models;

use App\Core\Model;

class ContactsModel extends Model {
    public function getContacts() {
        $query = $this->db->execute('SELECT * FROM contacts');
        return $query->fetchAll();
    }
}