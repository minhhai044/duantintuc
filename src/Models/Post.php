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
                'p.view',
                'p.time_created',
                'p.time_updated',
                'c.name as c_name'
            )
            ->from($this->tableName, 'p')
            ->innerJoin('p', 'categories', 'c', 'c.id = p.category_id')
            ->orderBy('p.id', 'desc')
            // ->setMaxResults(6)  
            // ->setFirstResult(0)
            ->fetchAllAssociative();
    }
    public function dashboardCategory()
    {
        return $this->queryBuilder
            ->select(
                'c.name as c_name',
                'COUNT(p.id) as post_count',
                'SUM(p.view) as total_views',
                'MIN(p.view) as min_views',
                'MAX(p.view) as max_views'
            )
            ->from($this->tableName, 'p')
            ->innerJoin('p', 'categories', 'c', 'c.id = p.category_id')
            ->groupBy('c.name')
            ->orderBy('c.name', 'asc')  // Sắp xếp theo tên danh mục (tùy chọn)
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
    public function paginate($page = 1, $perPage = 6)
    {
        $queryBuilder = clone ($this->queryBuilder);

        $totalPage = ceil($this->count() / $perPage);

        $offset = $perPage * ($page - 1);

        $data = $queryBuilder
            ->select(
                'p.id',
                'p.category_id',
                'p.account_id',
                'p.title',
                'p.excerpt',
                'p.img_post',
                'p.img_header',
                'p.content',
                'p.view',
                'p.time_created',
                'p.time_updated',
                'c.name as c_name'
            )
            ->from($this->tableName, 'p')
            ->innerJoin('p', 'categories', 'c', 'c.id = p.category_id')
            ->setFirstResult($offset)
            ->setMaxResults($perPage)
            ->orderBy('p.id', 'desc')
            ->fetchAllAssociative();

        return [$data, $totalPage];
    }

    public function searchKey($kyw = "")
    {
        $kyw = trim($kyw);
    
        // Bắt đầu xây dựng query
        $qb = $this->queryBuilder
        ->select('*')
        ->from($this->tableName, 'p')
        ->orderBy('p.id', 'DESC');
    
        // Nếu từ khóa không rỗng thì thêm điều kiện where
        if (!empty($kyw)) {
            $qb
            ->andWhere($qb->expr()->like('p.title', ':kyw'))
            ->setParameter('kyw', '%' . $kyw . '%');
        }
    
        // Thực thi query và trả về kết quả
        return $qb->executeQuery()->fetchAllAssociative();
    }
    


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
