<div class="card">
    <div class="card-header text-center">Add paper</div>
    <div class="card-body">
        <div class="card-title">
            <h3 class="title-2">Paper info</h3>
        </div>
        <hr>
        <form action="" method="post">
            <div class="row">

            </div>
            <div class="row">
                <div class="col-2">
                    <div class="form-group">
                        <label for="paper_id">ID</label>
                        <input type="text" class="form-control" id="paper_id" name="paper_id">
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <label for="field">Field</label>
                        <select class="form-control" id="field">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
                <div class="col-8">
                    <div class="form-group">
                        <label for="title" class="control-label mb-1">Title</label>
                        <input id="title" name="title" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="author" class="control-label mb-1">Author</label>
                        <input id="author" name="author" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="affiliation" class="control-label mb-1">Affiliation</label>
                        <input id="affiliation" name="affiliation" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="country" class="control-label mb-1">Country</label>
                        <input id="country" name="country" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label for="received_date" class="control-label mb-1">Received date</label>
                        <input id="received_date" name="received_date" type="date" class="form-control">
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