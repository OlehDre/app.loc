<div class="container">
    <h1>ADD NEW EMPLOYER</h1>
    <br><br>
    <form class="formbox" action="/add/user" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="mail" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Employer name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Address</label>
            <input type="text" class="form-control" name="address">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Phone</label>
            <input type="text" class="form-control" name="phone">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>