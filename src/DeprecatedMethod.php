<?php

namespace Recca0120\Repository;

use BadMethodCallException;

trait DeprecatedMethod
{
    /**
     * $enabledDeprecated.
     *
     * @var bool
     */
    protected $enabledDeprecated = true;

    /**
     * factory.
     *
     * @method factory
     *
     * @param array $data
     *
     * @return \Illuminate\Database\Eloquent
     */
    public function factory($data = [])
    {
        $this->deprecated(__METHOD__);

        return $this->newInstance($data);
    }

    /**
     * match.
     *
     * @method match
     *
     * @param \Recca0120\Repository\Criteria|array $criteria
     *
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Support\Collection
     */
    public function matching($criteria)
    {
        $this->deprecated(__METHOD__);

        return $this->match($criteria);
    }

    /**
     * findAll.
     *
     * @method findAll
     *
     * @return \Illuminate\Support\Collection
     */
    public function findAll()
    {
        $this->deprecated(__METHOD__);

        return $this->get([]);
    }

    /**
     * findBy.
     *
     * @method findBy
     *
     * @param \Recca0120\Repository\Criteria|array $criteria
     * @param array                                $orderBy
     * @param int                                  $limit
     * @param int                                  $offset
     *
     * @return \Illuminate\Support\Collection
     */
    public function findBy($criteria, $limit = null, $offset = null)
    {
        $this->deprecated(__METHOD__);

        return $this->get($criteria, ['*'], $limit, $offset);
    }

    /**
     * paginatedBy.
     *
     * @method paginatedBy
     *
     * @param mixed  $criteria
     * @param string $perPage
     * @param int    $pageName
     * @param int    $page
     *
     * @return \illuminate\Pagination\AbstractPaginator
     */
    public function paginatedBy($criteria, $perPage = null, $pageName = 'page', $page = null)
    {
        $this->deprecated(__METHOD__);

        return $this->paginate($criteria, $perPage, ['*'], $pageName, $page);
    }

    /**
     * paginatedAll.
     *
     * @method paginatedAll
     *
     * @param int $perPage
     *
     * @return \illuminate\Pagination\AbstractPaginator
     */
    public function paginatedAll($perPage = null, $pageName = 'page', $page = null)
    {
        $this->deprecated(__METHOD__);

        return $this->paginate([], $perPage, ['*'], $pageName, $page);
    }

    /**
     * findOneBy.
     *
     * @method findOneBy
     *
     * @param \Recca0120\Repository\Criteria|array $criteria
     *
     * @return mixed
     */
    public function findOneBy($criteria)
    {
        $this->deprecated(__METHOD__);

        return $this->first($criteria);
    }

    /**
     * countBy.
     *
     * @method countBy
     *
     * @param \Recca0120\Repository\Criteria|array $criteria
     *
     * @return int
     */
    public function countBy($criteria)
    {
        $this->deprecated(__METHOD__);

        return $this->count($criteria);
    }

    /**
     * chunkBy.
     *
     * @method chunkBy
     *
     * @param \Recca0120\Repository\Criteria|array $criteria
     * @param int                                  $count
     * @param callable                             $callback
     *
     * @return bool
     */
    public function chunkBy($criteria, $count, callable $callback)
    {
        $this->deprecated(__METHOD__);

        return $this->chunk($criteria, $count, $callback);
    }

    /**
     * deprecated.
     *
     * @method deprecated
     */
    protected function deprecated($method)
    {
        if ($this->enabledDeprecated === false) {
            throw new BadMethodCallException('BadMethodCallException Method ['.$method.'] is deprecated');
        }
    }
}