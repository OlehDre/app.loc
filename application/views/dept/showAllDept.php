<div class="container">
    <h1>Departments</h1>
    <br>
    <div class="allDepts">
        <?php if (!empty($dept)) {
            foreach ($dept as $val): ?>
                <div class="dept">
                    <form action="delete/dept" method="post">
                        <span><?php echo $val['title'] ?></span>
                        <input type="hidden" class="form-control" name="title" value=<?php echo $val['title'] ?>>
                        <button type="submit" class="btn btn-outline-danger">DELETE</button>
                    </form>
                </div><br>
            <?php endforeach;
        }else{
            echo 'Create a new department to display here';
        } ?>
    </div><br><br>

    <form class="deptForm" action="/depts" method="post">
        <div class="mb-3">
            <label for="inputTitle" class="form-label">Dept Title</label>
            <input type="text" id="inputTitle" class="form-control" name="title" placeholder="Title" required pattern="^\S+(.\S)*">
        </div>
        <?php if (!empty($error)) { ?>
            <p class="warning"><?php echo $error; ?></p>
        <?php } ?>
        <button type="submit" class="btn btn-success">CREATE</button>
    </form>

</div>