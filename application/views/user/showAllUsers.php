<div class="container">
    <h1>ALL EMPLOYERS</h1>
    <br>
    <div class="allEmployers">
        <?php foreach ($users as $val): ?>
        <a class="employer" href="employer.html">
            <span><?php echo $val['name'] ?></span>
            <p>Dept: third</p>
            <p style="display: none;"><?php echo $val['mail'] ?></p>
        </a>
        <?php endforeach; ?>
    </div>
</div>
