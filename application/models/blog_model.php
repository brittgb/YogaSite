<?php

class Blog_model extends CI_Model {

    var $title   = '';
    var $body = '';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_entries($num)
    {
        $query = $this->db->get('entries', $num);
        $result = [];

        foreach ($query->result() as $entry)
        {
           $entry->preview = substr($entry->body, 0, 250);
           $result[] = $entry;
        }

        return $result;
    }


    function get_entry_list()
    {
        $query = $this->db->get('entries');
        return $query->result();
    }

    function insert_entry()
    {
        $this->title   = $_POST['title']; 
        $this->body = $_POST['body'];



        $this->db->insert('entries', $this);
        return $this->db->insert_id();
    }

    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->body = $_POST['body'];

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

    function get_entry($id)
    {
        $query = $this->db->get_where('entries', ['id' => $id] );
        return $query->result()[0];
    }

}