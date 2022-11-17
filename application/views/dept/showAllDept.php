<div class="container">
    <h1>Departments</h1>
    <br>
    <div class="allDepts">
        <?php foreach ($dept as $val): ?>
            <div class="dept">
                <form action="/delete/dept" method="post">
                    <span><?php echo $val['title'] ?></span>
                    <input type="text" class="form-control" name="title" value=<?php echo $val['title'] ?> style="display: none;">
                    <button type="submit" class="btn btn-outline-danger">DELETE</button>
                </form>
            </div><br>
        <?php endforeach; ?>
    </div><br><br>

    <form class="deptForm" action="/add/dept" method="post">
        <div class="mb-3">
            <label for="inputTitle" class="form-label">Dept Title</label>
            <input type="text" id="inputTitle" class="form-control" name="title">
        </div>
        <button type="submit" class="btn btn-success">CREATE</button>
    </form>

</div>