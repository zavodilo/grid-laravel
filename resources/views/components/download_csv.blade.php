<div class="pull-right">
    <form method="GET" action="?">
        <button class="btn btn-warning" type="submit">
            <i class="fa fa-download"></i> @lang('system.form.btn.download')
        </button>
        <input type="hidden" name="download_csv" value="download_csv"/>
        <input type="hidden" ng-value="columns_hider | json" name="column_names"/>
        <input type="hidden" ng-value="headers | json " name="headers"/>
        <input type="hidden" ng-value="data_provider.search | json " name="search"/>
        <input type="hidden" ng-value="data_provider.sorting | json" name="sorting"/>
    </form>
</div>