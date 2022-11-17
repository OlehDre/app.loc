<div class="container">
    <?php foreach ($user as $val):?>
    <div class="userData">
        <h1 class="userName"><?php echo $val['name'] ?></h1>
        <br>
        <p class="userMail">Email: <?php echo $val['mail'] ?></p>
        <p class="userAddres">Addres: <?php echo $val['address'] ?></p>
        <p class="userPhone">Phone: <?php echo $val['phone'] ?></p>
        <p class="userComments">Comments: <?php echo $val['comment'] ?></p>
        <p class="userDept">Dept: <?php echo $val['dept'] ?></p>
        <?php endforeach; ?>
    </div>
</div>