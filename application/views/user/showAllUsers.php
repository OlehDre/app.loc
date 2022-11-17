<div class="container">
    <h1>All Users</h1>
    <br>
    <div class="allUsers">
        <?php foreach ($users as $val): ?>
        <form action="/user" method="post">
            <button class="theUser" type="submit">
            <span><?php echo $val['name'] ?></span>
            <p>Dept: <?php echo $val['dept'] ?></p>
            <input type="hidden" name="mail" class="form-control" value=<?php echo $val['mail'] ?> >
            </button>
        </form>
        <?php endforeach; ?>
    </div>
</div>
