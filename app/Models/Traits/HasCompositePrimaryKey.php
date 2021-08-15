<?php

namespace App\Models\Traits; 

use Illuminate\Database\Eloquent\Builder;
use Exception;

trait HasCompositePrimaryKey
{

    public function getIncrementing()
    {
        return false;
    }


    protected function setKeysForSaveQuery(Builder $query)
    {
        foreach ($this->getKeyName() as $key) {

            if (isset($this->$key)) {
                $query->where($key, '=', $this->$key);
            } else {
                throw new Exception(__METHOD__ . 'Missing part of the primary key: ' . $key);
            }
        }

        return $query;
    }


    public static function find($ids, $columns = ['*'])
    {
        $me    = new self;
        $query = $me->newQuery();
        foreach ($me->getKeyName() as $key) {
            $query->where($key, '=', $ids[$key]);
        }
        return $query->first($columns);
    }
}
