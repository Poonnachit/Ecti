<div class="row mb-4">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">Paper list</h2>
        </div>
    </div>
</div>
<!-- DATA TABLE -->
<div class="table-data__tool">
    <div class="table-data__tool-left">
        <div class="rs-select2--light rs-select2--md">
            <select class="js-select2" name="property">
                <option selected="selected">All Properties</option>
                <option value="">Option 1</option>
                <option value="">Option 2</option>
            </select>
            <div class="dropDownSelect2"></div>
        </div>
        <div class="rs-select2--light rs-select2--sm">
            <select class="js-select2" name="time">
                <option selected="selected">Today</option>
                <option value="">3 Days</option>
                <option value="">1 Week</option>
            </select>
            <div class="dropDownSelect2"></div>
        </div>
        <button class="au-btn-filter">
            <i class="zmdi zmdi-filter-list"></i>filters</button>
    </div>
    <div class="table-data__tool-right">
        <button class="au-btn au-btn-icon au-btn--blue">
            <i class="zmdi zmdi-plus"></i>Add paper</button>
    </div>
</div>
<div class="table-responsive table-responsive-data2">
    <table class="table table-data2">
        <thead>
            <tr>
                <th>Field</th>
                <th>Title</th>
                <th>Author</th>
                <th>Affiliation </th>
                <th>Received date</th>
                <th>status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr class="tr-shadow">
                <td>Lori Lynch</td>
                <td>
                    <span class="block-email">doe@example.com</span>
                </td>
                <td class="desc">Camera C430W 4k</td>
                <td>2018-09-24 19:10</td>
                <td>
                    <span class="status--process">Processed</span>
                </td>
                <td>$699.00</td>
                <td>
                    <div class="table-data-feature">
                        <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                            <i class="zmdi zmdi-mail-send"></i>
                        </button>
                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                            <i class="zmdi zmdi-edit"></i>
                        </button>
                        <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                            <i class="zmdi zmdi-delete"></i>
                        </button> -->
                        <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                            <i class="zmdi zmdi-more"></i>
                        </button>
                    </div>
                </td>
            </tr>
            <tr class="spacer"></tr>
        </tbody>
    </table>
</div>
<!-- END DATA TABLE -->