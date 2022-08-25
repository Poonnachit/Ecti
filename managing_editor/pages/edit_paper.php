<?php
require "../php/config.php";
$paper_id = $_GET["paper_id"];
$sql = "SELECT * FROM paper WHERE paper_id = '$paper_id'";
$query = mysqli_query($con, $sql);
$paper_data = mysqli_fetch_assoc($query);
?>
<div class="card mt-5">
    <div class="card-body">
        <div class="card-title">
            <h3 class="title-2">Paper info</h3>
        </div>
        <hr>
        <form action="./php/action_add_paper.php" method="post">
            <div class="row">
                <div class="col-3">
                    <div class="form-group">
                        <label for="paper_id">ID</label>
                        <input type="text" class="form-control" id="paper_id" name="paper_id" value="<?= $paper_data["paper_id"] ?>">
                    </div>
                </div>
                <div class="col-9">
                    <div class="form-group">
                        <label for="field">Field</label>
                        <select class="form-control" id="field" name="field">
                            <option selected disabled>Please select field</option>
                            <?php
                            $sql = "SELECT * FROM fields";
                            // echo $sql;
                            $query = mysqli_query($con, $sql);

                            while ($row = mysqli_fetch_assoc($query)) {
                            ?>
                                <option value="<?php echo $row["field_id"]; ?>" <?php if ($row["field"] == $paper_data["field"]) {
                                                                                    echo "selected";
                                                                                } ?>>
                                    <?php echo $row["field"]; ?>
                                </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="title" class="control-label mb-1">Title</label>
                        <input id="title" name="title" type="text" class="form-control" value="<?= $paper_data["title"] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="author" class="control-label mb-1">Author</label>
                        <input id="author" name="author" type="text" class="form-control" value="<?= $paper_data["author"] ?>">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="affiliation" class="control-label mb-1">Affiliation</label>
                        <input id="affiliation" name="affiliation" type="text" class="form-control" value="<?= $paper_data["affiliation"] ?>">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="country" class="control-label mb-1">Country</label>
                        <input id="country" name="country" type="text" class="form-control" value="<?= $paper_data["country"] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label for="received_date" class="control-label mb-1">Received date</label>
                        <input id="received_date" name="received_date" type="date" class="form-control" value="<?= $paper_data["received"] ?>">
                    </div>
                </div>
            </div>
            <div>
                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                    <i class="fa fa-chevron-circle-right fa-lg"></i>&nbsp;
                    Add paper
                </button>
            </div>
        </form>
    </div>
</div>