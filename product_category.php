<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VProduct Category</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/corespondent_form.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/global.css" />
</head>
<body>
    <form action="r_product_category.php" method="post">
        <div class="contrainer-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1>VProduct Category</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h3>VProduct Category ID</h3>
                </div>
                <div class="col-md-6">
                    <input id="txt_product_category_id" type="text" name="txt_product_category_id">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h3>VProduct Category Code</h3>
                </div>
                <div class="col-md-6">
                    <input id="txt_product_category_code" type="text" name="txt_product_category_code">
                </div>
            </div>
        <div class="row">
                <div class="col-md-3">
                    <h3>VProduct Category Name 1</h3>
                </div>
                <div class="col-md-6">
                    <input id="txt_product_category_name1" type="text" name="txt_product_category_name1">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h3>VProduct Category Name 2</h3>
                </div>
                <div class="col-md-6">
                    <input id="txt_product_category_name2" type="text" name="txt_product_category_name2">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h3>VProduct Category Status</h3>
                </div>
                <div class="col-md-6">
                    <input id="txt_product_category_status" type="text" name="txt_product_category_status">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h3>VProduct Category Search</h3>
                </div>
                <div class="col-md-6">
                    <input id="txt_product_category_search" type="text" name="txt_product_category_search">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h3>VProduct Category What To Do</h3>
                </div>
                <div class="col-md-6">
                    <input id="txt_product_category_what_to_do" type="text" name="txt_product_category_what_to_do">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 input">
                    <input class="btn btn-primary" id="sbt" type="Submit" name="btnsave" value="Save">
                    <input class="btn btn-primary" id="sbt" type="Submit" name="btnclr" value="Clear">
                </div>
            </div> 
        </div>
    </form>    
</body>
</html>