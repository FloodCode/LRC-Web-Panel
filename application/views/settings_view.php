<?php

if (isset($_GET['err']))
{
    switch($_GET['err'])
    {
        case 1:
            $errmsg = 'Wrong password';
            break;
        case 2:
            $errmsg = 'Password must be at least 5 characters long';
            break;
        case 3:
            $errmsg = 'Passwords don\'t match';
            break;
    }
}

if (isset($_GET['msg']))
{
    switch($_GET['msg'])
    {
        case 1:
            $infmsg = 'Password was successfully changed';
            break;
    }
}

?>
<h2>Settings</h2>
<div class="flex-container">
   
    <div>
        <div class="content-box">
            <div class="content-title">
                <p>Color scheme</p>
            </div>
            <div class="content-block">
                <div>
                    <a href="/settings/setcolor/?color=indigo"><div class="color-button" style="background-color: #3F51B5;"></div></a>
                    <a href="/settings/setcolor/?color=red"><div class="color-button" style="background-color: #F44336;"></div></a>
                    <a href="/settings/setcolor/?color=deep-purple"><div class="color-button" style="background-color: #673AB7;"></div></a>
                    <a href="/settings/setcolor/?color=blue"><div class="color-button" style="background-color: #2196F3;"></div></a>
                    <a href="/settings/setcolor/?color=teal"><div class="color-button" style="background-color: #009688;"></div></a>
                </div>
                <div>
                    <a href="/settings/setcolor/?color=green"><div class="color-button" style="background-color: #4CAF50;"></div></a>
                    <a href="/settings/setcolor/?color=yellow"><div class="color-button" style="background-color: #FFEB3B;"></div></a>
                    <a href="/settings/setcolor/?color=brown"><div class="color-button" style="background-color: #795548;"></div></a>
                    <a href="/settings/setcolor/?color=deep-orange"><div class="color-button" style="background-color: #FF5722;"></div></a>
                    <a href="/settings/setcolor/?color=grey"><div class="color-button" style="background-color: #9E9E9E;"></div></a>
                </div>
            </div>
        </div>
    </div>
    
    <div>
        <div class="content-box">
            <div class="content-title">
                <p>Change password</p>
            </div>
            <div class="content-block">
                <form action="/settings/changepassword/" method="post">
                    <div>
                        <label style="display: block;">Current password</label>
                        <input type="password" name="current_password">
                    </div>
                    <div>
                        <label style="display: block;">New password</label>
                        <input type="password" name="new_password1">
                    </div>
                    <div>
                        <label style="display: block;">Repeat new password</label>
                        <input type="password" name="new_password2">
                    </div>
                    <?php if(isset($errmsg)): ?>
                    <p style="color: red;"><?php echo $errmsg; ?></p>
                    <?php endif; ?>
                    <?php if(isset($infmsg)): ?>
                    <p><?php echo $infmsg; ?></p>
                    <?php endif; ?>
                    <div>
                        <input type="submit" style="margin: 10px 0;" value="Change">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div>
        <div class="content-box">
            <div class="content-title">
                <p>Lorem ipsum</p>
            </div>
            <div class="content-block">
                <p>Sample text</p>
            </div>
        </div>
        
        <div class="content-box">
            <div class="content-title">
                <p>Dolor sit amet</p>
            </div>
            <div class="content-block">
                <p>Sample text</p>
                <p>Sample text</p>
                <p>Sample text</p>
            </div>
        </div>
    </div>
</div>
