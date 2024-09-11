<?php

namespace App\Data\Repositories\Role;

interface RoleRepository
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
     * Return dummy object
     */
    public function getDummy();

    /**
     * Creates/Update & Return Object
     */
    public function createUpdate(array $data, $id = false);

    /**
     * Delete Object
     */
    public function delete($id);

    /**
     * Return Datatable
     */
    public function dataTable();

    /**
     * Update Status
     */
    public function action($id, $status);

    public function getActive();
    
    public function roles();


   
}
