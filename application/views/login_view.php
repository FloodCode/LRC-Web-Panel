<div class="login-box">
    <div class="login-title">
        <h2>Authorization</h2>
    </div>
    <div class="container">
        <form method="post">
            <label style="margin: 10px 0 0 0;">Login</label>
            <input style="width: 334px;" type="text" name="login">
            <label style="margin: 10px 0 0 0;">Password</label>
            <input style="width: 334px;" type="password" name="password">
            <div style="text-align: right;">
                <input type="submit" value="Log in" name="btn">
            </div>
        </form>
    </div>
</div>


<?php if (isset($data['error'])): ?>
<p style="color: red; margin: 0; padding: 10px;"><?php echo $data['error']; ?></p>
<?php endif; ?>