<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Feedback Form</h1>
        <form action="response.php" method="post">
            <h6 class="text-danger">* required field</h6>
            <div class="row mb-3">
                <label for="fullName" class="col-sm-2 col-form-label">Name: </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="fullName" name="full_name">
                    <span class="text-danger">*</span>
                </div>
            </div>
            <div class="row mb-3">
                <label for="email" class="col-sm-2 col-form-label">Email: </label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email">
                    <span class="text-danger">*</span>
                </div>
            </div>
            <div class="row mb-3">
                <label for="website" class="col-sm-2 col-form-label">Website: </label>
                <div class="col-sm-10">
                    <input type="url" class="form-control" id="website" name="website">
                    <span class="text-danger"></span>
                </div>
            </div>
            <div class="row mb-3">
                <label for="comment" class="col-sm-2 col-form-label">Comment: </label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="3" id="comment" name="comment"></textarea>
                </div>
            </div>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="M" checked>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="F">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    <div class="form-check disabled">
                        <input class="form-check-input" type="radio" name="gender" id="other" value="O">
                        <label class="form-check-label" for="other">Others</label>
                    </div>
                </div>
            </fieldset>        
            <button type="submit" class="btn btn-primary" id="saveBtn" name="save_btn">Save</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>