<?php require "../php/config.php"; ?>
<div class="container-fluid text-center my-5" style="width:100%">
    <div class="table-data__tool-right">
        <div class="row my-5">
            <div class="col mt-5">
                <h1>Paper list</h1>
            </div>
        </div>
        <div class="row">
            <form>
                <div class="col">
                    <select class="form-control" id="field" name="field">
                        <option selected disabled>Fields</option>
                        <?php
                        $sql = "SELECT DISTINCT field FROM paper";
                        // echo $sql;
                        $query = mysqli_query($con, $sql);

                        while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                        <option value="<?php echo $row["field"]; ?>">
                            <?php echo $row["field"]; ?>
                        </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="col">
                    <select class="form-control" id="field" name="field">
                        <option selected disabled>status</option>
                        <?php
                        $sql = "SELECT DISTINCT status FROM paper";
                        // echo $sql;
                        $query = mysqli_query($con, $sql);

                        while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                        <option value="<?php echo $row["status"]; ?>">
                            <?php echo $row["status"]; ?>
                        </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </form>
            <div class="col px-0 justify-content-end d-flex">
                <a href="./?content=add_paper"><button class="btn btn-secondary">Add paper</button></a>
            </div>
        </div>
    </div>
</div>
<!-- DATA TABLE -->
<div class="table-responsive table-responsive-data2">
    <div class="table-data__tool-right">
        <table id="list_paper" class="table table-data2 mb-5" style="width:100%">
            <thead>
                <tr class="bg-light">
                    <th>Field</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Affiliation</th>
                    <th>Received date</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (empty($_GET["field"]) && empty($_GET["status"])) {
                    $sql = "SELECT * FROM paper";
                } elseif (empty($_GET["status"])) {
                    $sql = "SELECT * FROM paper WHERE field='" . $_GET["field"] . "'";
                } elseif (empty($_GET["field"])) {
                    $sql = "SELECT * FROM paper WHERE status='" . $_GET["status"] . "'";
                } else {
                    $sql = "SELECT * FROM paper WHERE field='" . $_GET["field"] . "' AND " . "status='" . $_GET["status"] . "'";
                }
                // echo "$sql";
                $query = mysqli_query($con, $sql);
                while ($data = mysqli_fetch_assoc($query)) {
                ?>
                <tr class="tr-shadow">
                    <td class="">
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
                        <span hidden><?php echo $data['status']; ?></span>
                        <form action="./php/somefile.php" method="POST" id="status_form">
                            <select class="form-control" name="set_status"
                                onchange="console.log($('#status_form').submit())">
                                <option value="">Select status</option>
                                <?php
                                    $statuss = array(
                                        "Submit",
                                        "Send Back",
                                        "1st Review",
                                        "Minor/Major",
                                        "2nd Review",
                                        "Revision Reminded",
                                        "Accept",
                                        "Proof Read",
                                        "LaTeX",
                                        "Production",
                                        "Publish",
                                        "Decline",
                                        "Similarity",
                                        "Withdrawn"
                                    );
                                    foreach ($statuss as $status) { ?>
                                <option value="<?= $status ?>" <?php if ($status == $data["status"]) {
                                                                            echo "selected";
                                                                        } ?>>
                                    <?= $status ?></option>
                                <?php } ?>

                            </select>
                        </form>
                    </td>
                    <td>
                        <div class="table-data-feature justify-content-center">
                            <a href="./?content=edit_paper&paper_id=<?= $data["paper_id"] ?>">
                                <button class="item mr-2" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </button>
                            </a>
                            <a href="./?content=delete_paper&paper_id=<?= $data["paper_id"] ?>">
                                <button class="item mr-2" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                            </a>
                            <a href="./?content=view_paper&paper_id=<?= $data["paper_id"] ?>">
                                <button class="item mr-2" data-toggle="tooltip" data-placement="top" title="View">
                                    <i class="zmdi zmdi-eye"></i>
                                </button>
                            </a>
                        </div>
                    </td>
                </tr>

                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<!-- END DATA TABLE -->
<script>
$(document).ready(function() {
    $('#list_paper').DataTable();
    $('#list_paper').css("border-collapse", "separate");
    $('#list_paper').css("border-spacing", "0px 15px");
    $('.sorting_1').css("padding-top", "35px")
});
</script>