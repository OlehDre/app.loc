<div class="container">
    <h1>DEPTS</h1>
    <br>
    <div class="allDepts">
        <?php foreach ($dept as $val): ?>
            <div class="dept">
                <span><?php echo $val['title'] ?></span>
                <button type="button" class="btn btn-outline-danger">DELETE</button>
            </div><br>
        <?php endforeach; ?>
    </div><br><br>

    <form class="deptForm" action="/add/dept/" method="post">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Dept Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <button type="submit" class="btn btn-success">CREATE</button>
    </form>

</div>