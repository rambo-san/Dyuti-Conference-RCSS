<?php

namespace App\Data\Repositories\Contact;

interface ContactRepository
{

    /**
     *Return All
     */
    public function all($where = [],  $select = [], $first = false);

    /**
     * Return Specific Object By Id
     */
    public function get($id);
  
    /**
     * Return Datatable
     */
    public function dataTable();

    /**
     * Update Status
     */
    public function createUpdate(array $data, $id = false);




   
}
