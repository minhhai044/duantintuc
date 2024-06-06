<?php

namespace Minhhai\Duan\Models;

use Minhhai\Duan\Commons\Model;

class Account extends Model
{
    protected string $tableName = 'accounts';
    public function findByEmail($email)
    {
        return $this->queryBuilder
            ->select('*')
            ->from($this->tableName)
            ->where('email = ?')
            ->setParameter(0, $email)
            ->fetchAssociative();
    }
}
