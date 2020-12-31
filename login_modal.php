<!DOCTYPE html>
<html>
<head>
    

<link rel="stylesheet" href="css/styles.css">

</head>
<body>



<div class="modal " id="pz" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header" >
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">LOG IN</h4>
            </div>
            <div class="modal-body" >
                <form method="post" action="logi.php">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" >
                    </div>
                    <button class="btn btn-danger" type="submit" value="submit"  name="button">Login</button>

                </form>
            </div>
            <div class="modal-footer" >
                <p>New User? <a href="signup.php">Sign Up</a></p>
            </div>
        </div>
        
    </div>
</div>


</body>
</html>