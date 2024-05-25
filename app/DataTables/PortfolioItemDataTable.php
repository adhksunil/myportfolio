<?php

namespace App\DataTables;

use App\Models\PortfolioItem;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PortfolioItemDataTable extends DataTable
{
   public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'admin.portfolio-item.action');
    }

    public function query(PortfolioItem $model)
    {
        return $model->newQuery()->select('id', 'title', 'description');
    }

    public function html()
    {
        return $this->builder()
            ->columns([
                ['data' => 'id', 'name' => 'id', 'title' => 'ID'],
                ['data' => 'title', 'name' => 'title', 'title' => 'Title'],
                ['data' => 'description', 'name' => 'description', 'title' => 'Description'],
                ['data' => 'action', 'name' => 'action', 'title' => 'Action', 'orderable' => false, 'searchable' => false],
            ]);
    }
}
