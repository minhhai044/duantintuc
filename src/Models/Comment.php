<?php
namespace Minhhai\Duan\Models;

use Minhhai\Duan\Commons\Model;

class Comment extends Model{
    protected string $tableName = 'comments';
    public function findByIdPro($idPro)
    {
        return $this->queryBuilder
            ->select('*')
            ->from($this->tableName)
            ->where('post_id = ?')
            ->setParameter(0, $idPro)
            ->fetchAllAssociative();
    }
    // public function findByID($id)
    // {
    //     return $this->queryBuilder
    //         ->select('*')
    //         ->from($this->tableName)
    //         ->where('id = ?')
    //         ->setParameter(0, $id)
    //         ->fetchAssociative();
    // }
}