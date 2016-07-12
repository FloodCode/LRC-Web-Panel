<h2>Login</h2>
<div style="width: 300px; margin: 0 auto;">
    <form action="" method="post">
        <label>Login</label>
        <input style="width: 284px;" type="text" name="login">
        <label>Password</label>
        <input style="width: 284px;" type="password" name="password">
        <div style="text-align: right;">
            <input type="submit" value="Log in" name="btn">
        </div>
    </form>
</div>


<?php extract($data); ?>
<?php if($login_status=="access_granted") { ?>
<p style="color:green">Success.</p>
<?php } elseif($login_status=="access_denied") { ?>
<p style="color:red">Login or password is incorrect.</p>
<?php } ?>
