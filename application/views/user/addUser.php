<div class="container">
    <h1>Add New User</h1>
    <br><br>
    <form class="formbox" action="/add/user" method="post">
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Email address</label>
            <input type="email" id="inputEmail" class="form-control" name="mail" aria-describedby="emailHelp" placeholder="name@mail.com" required>
        </div>
        <div class="mb-3">
            <label for="inputName" class="form-label">Employer name</label>
            <input type="text" id="inputName" class="form-control" name="name" placeholder="Name" required>
        </div>
        <div class="mb-3">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" id="inputAddress" class="form-control" name="address" placeholder="City, street" required>
        </div>
        <div class="mb-3">
            <label for="inputPhone" class="form-label">Phone</label>
            <input type="tel" id="inputPhone" class="form-control" name="phone" placeholder="XXX-XXX-XX-XX" required>
        </div>
        <div class="mb-3">
            <label for="inputComment" class="form-label">Comment</label>
            <textarea class="form-control" id="inputComment" rows="3" name="comment"></textarea>
        </div>
        <div class="mb-3">
            <label for="inputDept" class="form-label">Departments</label>
            <select class="form-select" id="inputDept" name="dept" required>
                <?php if (!empty($dept)) {
                    foreach ($dept as $key): ?>
                        <option><?php echo $key['title']; ?></option>
                    <?php endforeach;
                } else {
                    echo 'Add dept to Data base';
                } ?>
            </select>
        </div>
        <?php if (!empty($error)) { ?>
            <p class="warning"><?php echo $error; ?></p>
        <?php } ?>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>