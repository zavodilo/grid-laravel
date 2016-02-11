<th ng-show="showColumn('{{ $field }}')" @if(isset($column['class'])) class="{{ $column['class'] }}" @endif>
    <a href="#"
       @if(!isset($column['sortable']) || $column['sortable'] === true)
       ng-click="sort($event, '{{ $field }}')"
       @endif
       ng-class="{
            'text-muted': data_provider.sorting.field != '{{ $field }}'
        }">

        {{ $column['title'] }}
        @if(!isset($column['sortable']) || $column['sortable'] === true)
            <i class="fa" ng-class="{
                'fa-sort-amount-asc': data_provider.sorting.dir == 'asc',
                'fa-sort-amount-desc': data_provider.sorting.dir == 'desc'
            }"></i>
        @endif
    </a>
</th>
