<?php
require "../php/config.php";
$paper_id = $_GET["paper_id"];
$sql = "SELECT * FROM paper WHERE paper_id = '$paper_id'";
$query = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($query);
?>
<div class="card">
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
                        <input type="text" class="form-control" id="paper_id" name="paper_id"
                            value="<?= $data["paper_id"] ?>">
                    </div>
                </div>
                <div class="col-9">
                    <div class="form-group">
                        <label for="field">Field</label>
                        <select class="form-control" id="field" name="field">
                            <option disabled>Please select field</option>
                            <?php
                            $fields = array(
                                'Invited',
                                'Review',
                                'Algorithm',
                                'AI & ML',
                                'Com System & Security',
                                'Networks & Clouds',
                                'Data Science & IoT',
                                'Machine Vision, DSP, HCI',
                                'Software Sys',
                                'Emerging IT & Smart System',
                                'SS ECTI',
                                'SS non-ECTI',
                                'Out-of-Scope'
                            );
                            foreach ($fields as $field) { ?>
                            <option value="<?= $field ?>" <?php if ($field = $data["field"]) {
                                                                    echo "selected";
                                                                } ?>>
                                <?= $field ?></option>
                            <?php }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="title" class="control-label mb-1">Title</label>
                        <input id="title" name="title" type="text" class="form-control" value="<?= $data["title"] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="author" class="control-label mb-1">Author</label>
                        <input id="author" name="author" type="text" class="form-control"
                            value="<?= $data["author"] ?>">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="affiliation" class="control-label mb-1">Affiliation</label>
                        <input id="affiliation" name="affiliation" type="text" class="form-control"
                            value="<?= $data["affiliation"] ?>">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="country" class="control-label mb-1">Country</label>
                        <input id="country" name="country" type="text" class="form-control"
                            value="<?= $data["country"] ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label for="received_date" class="control-label mb-1">Received date</label>
                        <input id="received_date" name="received_date" type="date" class="form-control"
                            value="<?= $data["received"] ?>">
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