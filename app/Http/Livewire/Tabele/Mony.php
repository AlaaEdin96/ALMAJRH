<?php

namespace App\Http\Livewire\Tabele;

use App\Models\AccountStatement;
use App\Models\User;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class Mony extends DataTableComponent
{
   /* public function render()
    {
        return view('livewire.tabele.mony');
    }*/
    protected $model = AccountStatement::class;

    public function columns(): array
    {
       
    
      
     //   'creted_by_user',
 
        return [
            Column::make('id')
            ->sortable()
            
            ->html(),

            Column::make('pris')
    ->sortable()
    ->secondaryHeader(function($rows) {
        return 'Subtotal: ' . $rows->sum('pris');
    }),
  
                 Column::make('المبلغ','pris')
                ->sortable()
                ->searchable(),
                Column::make('الزبون','to')
                            ->sortable(),
                Column::make('الممول','from_user')
                ->sortable()
                ->searchable(),

                Column::make( 'tayp')
                ->secondaryHeaderFilter('tayp'),

            Column::make('المشروع', 'project_code')
                ->sortable()
                ->searchable(),
         
        ];
    }   

    public function configure(): void
    {
        $this->setPrimaryKey('id')
        ->setReorderEnabled()
        ->setSingleSortingDisabled()
        ->setHideReorderColumnUnlessReorderingEnabled()
        ->setFilterLayoutSlideDown()
        ->setRememberColumnSelectionDisabled()
        ->setSecondaryHeaderTrAttributes(function($rows) {
            return ['class' => 'bg-gray-100'];
        })
        ->setSecondaryHeaderTdAttributes(function(Column $column, $rows) {
            if ($column->isField('id')) {
                return ['class' => 'text-red-500'];
            }

            return ['default' => true];
        })
        ->setFooterTrAttributes(function($rows) {
            return ['class' => 'bg-gray-100'];
        })
        ->setFooterTdAttributes(function(Column $column, $rows) {
            if ($column->isField('name')) {
                return ['class' => 'text-green-500'];
            }

            return ['default' => true];
        })
        ->setUseHeaderAsFooterEnabled()
        ->setHideBulkActionsWhenEmptyEnabled();
    }
}
