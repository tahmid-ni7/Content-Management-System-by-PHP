
<div class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="registration-form">
          <form method="post" action="" enctype="multipart/form-data">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="password">Type</label>
               <select name="type" class="form-control" id="type" >
             <option value="0">Select</option>
             <option value="1">Teacher</option>
             <option value="2">Student</option>
             <option value="3">Admin</option>
                </select>
              </div>

              <button type="submit" name="btnLogin" class="btn btn-default">Submit</button>
              <a href="?p=registration" class="notregister">Dont't Have An Account? Register Here</a>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>