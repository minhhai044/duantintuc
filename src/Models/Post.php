<?php

namespace Minhhai\Duan\Models;

use Minhhai\Duan\Commons\Model;

class Post extends Model
{

    protected string $tableName = 'posts';
    public function all()
    {
        return $this->queryBuilder
            ->select(
                'p.id',
                'p.category_id',
                'p.account_id',
                'p.title',
                'p.excerpt',
                'p.img_post',
                'p.img_header',
                'p.content',
                'p.time_created',
                'p.time_updated',
                'c.name as c_name'
            )
            ->from($this->tableName, 'p')
            ->innerJoin('p', 'categories', 'c', 'c.id = p.category_id')
            ->orderBy('p.id', 'desc')
            ->setMaxResults(6)  
            ->setFirstResult(0)
            ->fetchAllAssociative();
    }
    public function findByCategory($category_id)
    {
        return $this->queryBuilder
            ->select('*')
            ->from($this->tableName)
            ->where('category_id = ?')
            ->setParameter(0, $category_id)
            ->fetchAllAssociative();
    }
    public function findByID($id)
    {
        return $this->queryBuilder
            ->select('*')
            ->from($this->tableName)
            ->where('id = ?')
            ->setParameter(0, $id)
            ->fetchAssociative();
    }
    //     public function paginate($page = 1, $perPage = 5)
    //     {
    //         $queryBuilder = clone($this->queryBuilder);

    //         $totalPage = ceil($this->count() / $perPage);

    //         $offset = $perPage * ($page - 1);

    //         $data = $queryBuilder
    //         ->select(
    //             'p.id', 'p.category_id','p.account_id', 'p.title','p.excerpt','p.img_post','p.img_header','p.content', 'p.created_at', 'p.updated_at',
    //             'c.name as c_name'
    //         )
    //         ->from($this->tableName, 'p')
    //         ->innerJoin('p', 'categories', 'c', 'c.id = p.category_id')
    //         ->setFirstResult($offset)
    //         ->setMaxResults($perPage)
    //         ->orderBy('p.id', 'desc')
    //         ->fetchAllAssociative();

    //         return [$data, $totalPage];
    //     }

    //     public function findByID($id)
    //     {
    //         return $this->queryBuilder
    //             ->select(
    //                 'p.id', 'p.category_id','p.account_id', 'p.title','p.excerpt','p.img_post','p.img_header','p.content', 'p.created_at', 'p.updated_at',
    //             'c.name as c_name'
    //             )
    //             ->from($this->tableName, 'p')
    //             ->innerJoin('p', 'categories', 'c', 'c.id = p.category_id')
    //             ->where('p.id = ?')
    //             ->setParameter(0, $id)
    //             ->fetchAssociative();
    //     }
}
