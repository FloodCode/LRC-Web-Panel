<style>
    h1, h2 , h3 , h4 {
        display: inline-block; margin: 5px;
    }
    h4 {
        color: #7986cb;
    }
</style>
<?php if ($data['state'] == 'no results'): ?>
<h2>User not found</h2>
<?php elseif ($data['state'] == 'ok'): ?>
    <h1>User #<?php echo $data['user']['id']; ?></h1>
    <div style="display: inline-block; margin: 5px; color: #999999">last seen <?php echo $data['user']['disconnect_time'] ;?></div>

    <table width="100%" style="margin-top:25px;">
    <tr>
        <td><h3>Ip address: </h3><?php echo $data['user']['ip']; ?></td>
        <td><h3>CPU :</h3><h4><?php echo $data['user']['CPU'];?></h4></td>
    </tr>
    <tr>
        <td>
            <h3>Keyboard count :</h3>
            <a href="/keyboardlist/index/?uid=<?php echo $data['user']['id'];?>">
                <h4><?php echo $data['keyboardCount'];?></h4>
            </a>
        </td>
        <td>
            <h3>RAM :</h3><h4><?php echo $data['user']['RAM'];?> GB</h4></td>
    </tr>
    <tr>
        <td>
            <h3>Clipboard count :</h3>
            <a href="/clipboardlist/index/?uid=<?php echo $data['user']['id'];?>">
                <h4><?php echo $data['clipboardCount'];?></h4>
            </a>
        </td>
        <td><h3>OS :</h3><h4><?php echo $data['user']['OS'];?></h4></td>
    </tr>
    <tr>
        <td><h3>Sha256</h3><small> <?php // echo $data['user']['sha256']; ?></small></td>
        <td><h3>Speed :</h3><h4><?php echo $data['user']['speed'];?> mb per sec</h4></td>
    </tr>
    </table>
<?php endif; ?>