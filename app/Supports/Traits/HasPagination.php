<?php


namespace App\Supports\Traits;


trait HasPagination
{
    public function getPerPage(): int
    {
        $perPage = (int)request()->query('perPage', 20);
        return $perPage >= 1 && $perPage <= 100 ? $perPage : 20;
    }

    public function getPage(): int
    {
        $page = (int)request()->query('page', 1);
        return $page > 0 ? $page : 1;
    }
}
