<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap admin</title>

    <?php include 'partials/head.php'; ?>
</head>

<body>
    <?php include 'partials/header.php'; ?>

    <div class="content-wrapper">
        <?php include 'partials/sidebar.php'; ?>

        <div class="col-sm-10 col-sm-offset-2 col-xs-12 content">

        <div class="panel panel-default">
            <div class="panel-body">
            <form class="form-inline well">
                <div class="form-group">
                    <label for="language">Language</label>
                    <select name="language" id="language">
                        <option value="">All</option>
                        <option value="en">English</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <select name="language" id="type">
                        <option value="">All</option>
                        <option value="article">Article</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="prefecture">Prefecture</label>
                    <select name="language" id="prefecture">
                        <option value="">All</option>
                        <option value="tokyo">Tokyo</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="language" id="status">
                        <option value="">All</option>
                        <option value="2">Approved</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="search">Search</label>
                    <input type="text" class="form-control" id="search" placeholder="Search">
                </div>

                <noscript>
                    <button type="submit" class="btn btn-default">Filter</button>
                </noscript>
            </form>

            <table class="table table-striped">
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Created</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td><a href="#">My first article</a></td>
                    <td>Martyn Bissett</td>
                    <td>3 days ago</td>
                    <td>Draft</td>
                </tr>
                <tr>
                    <td><a href="#">My first article</a></td>
                    <td>Martyn Bissett</td>
                    <td>3 days ago</td>
                    <td>Draft</td>
                </tr>
            </table>

            <nav>
            <ul class="pagination">
            <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
            </ul>
            </nav>
        </div>
    </div>
</div>
    </div>

    <?php include 'partials/footer.php'; ?>
</body>

</html>
