<?php
/**
 * Created by PhpStorm.
 * User: Shyam Makwana
 * Date: 12/12/17
 * Time: 6:46 PM
 */

interface RepositoryInterface
{
    public function all($columns = array('*'));

    public function paginate($perPage = 15, $columns = array('*'));

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function find($id, $columns = array('*'));

    public function findBy($field, $value, $columns = array('*'));
}