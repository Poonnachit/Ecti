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
        <a href="./?content=add_paper">
            <button class="au-btn au-btn-icon au-btn--blue">
                <i class="zmdi zmdi-plus"></i>Add paper</button>
        </a>
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
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <?php
        require "../php/config.php";
        $sql = "SELECT * FROM paper";
        $query = mysqli_query($con, $sql);
        while ($data = mysqli_fetch_assoc($query)) {
        ?>
        <tbody>
            <tr class="tr-shadow">
                <td>
                    <?php echo $data['field']; ?>
                </td>
                <td>
                    <?php echo $data['title']; ?>
                </td>
                <td>
                    <?php echo $data['author']; ?>
                </td>
                <td>
                    <?php echo $data['affiliation']; ?>
                </td>
                <td>
                    <?php echo $data['received']; ?>
                </td>
                <td>
                    <?php echo $data['status']; ?>
                </td>
                <td>
                    <div class="table-data-feature">
                        <a href="./?content=edit_paper&paper_id=<?= $data["paper_id"] ?>">
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                            </button>
                        </a>
                        <a href="./?content=delete_paper&paper_id=<?= $data["paper_id"] ?>">
                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                            </button>
                        </a>
                        <a href="./?content=view_paper&paper_id=<?= $data["paper_id"] ?>">
                            <button class="item" data-toggle="tooltip" data-placement="top" title="View">
                                <i class="zmdi zmdi-eye"></i>
                            </button>
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="spacer"></tr>
        </tbody>
        <?php
        }
        ?>
        </tbody>
    </table>
</div>
<!-- END DATA TABLE -->