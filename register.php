<form method="POST" >
    <div class="form-group">
        <input type="text" name="nama" class="form-control form-control-user" placeholder="Full Name">
    </div>
    <div class="form-group">
        <select class="form-control form-control-user" name="level">
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>
    </div>
    <div class="form-group">
        <input type="text" name="username" class="form-control form-control-user" placeholder="Username">
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="password" class="form-control form-control-user"
               name="password" placeholder="Password">
        </div>
        <div class="col-sm-6">
            <input type="password" class="form-control form-control-user"
                name="repeat" placeholder="Repeat Password">
        </div>
    </div>
    <form method="POST" >
        <div class="form-group">
            <input type="text" name="nama" class="form-control form-control-user" placeholder="Full Name">
        </div>
        <div class="form-group">
            <select class="form-control form-control-user" name="level">
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>
        <div class="form-group">
            <input type="text" name="username" class="form-control form-control-user" placeholder="Username">
        </div>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="password" class="form-control form-control-user"
                   name="password" placeholder="Password">
            </div>
            <div class="col-sm-6">
                <input type="password" class="form-control form-control-user"
                    name="repeat" placeholder="Repeat Password">
            </div>
        </div>
        <button type="submit" name="simpan" class="btn btn-primary btn-user btn-block">
            Register Account
        </button>
        <hr>
        <a href="https://www.google.com/" class="btn btn-google btn-user btn-block">
            <i class="fab fa-google fa-fw"></i> Register with Google
        </a>
        <a href="https://id-id.facebook.com/" class="btn btn-facebook btn-user btn-block">
            <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
        </a>
    </form>
    <?php
        include "koneksi.php";

        if(isset($_POST['simpan'])){
            mysqli_query($koneksi,"insert into register set 
            username = '$_POST[username]',
            password = '$_POST[password]',
            nama = '$_POST[nama]',
            level = '$_POST[level]'");
        }
         ?>