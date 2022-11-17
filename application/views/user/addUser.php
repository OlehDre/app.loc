<div class="container">
    <h1>Add New User</h1>
    <br><br>
    <form class="formbox" action="/create/user" method="post">
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Email address</label>
            <input type="email" id="inputEmail" class="form-control" name="mail" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="inputName" class="form-label">Employer name</label>
            <input type="text" id="inputName" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" id="inputAddress" class="form-control" name="address">
        </div>
        <div class="mb-3">
            <label for="inputPhone" class="form-label">Phone</label>
            <input type="text" id="inputPhone" class="form-control" name="phone">
        </div>
        <div class="mb-3">
            <label for="inputComment" class="form-label">Comment</label>
            <textarea class="form-control" id="inputComment" rows="3" name="comment"></textarea>
        </div>
        <div class="mb-3">
            <label for="inputDept" class="form-label">Departments</label>
            <input list="deptList" class="form-control" id="inputDept" name="dept">
            <datalist id="deptList">
                <?php foreach ($dept as $key): ?>
                    <option><?php echo $key['title']; ?></option>
                <?php endforeach; ?>
            </datalist>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>