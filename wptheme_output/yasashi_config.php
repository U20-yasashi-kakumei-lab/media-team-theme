<?php
// Yasashi configration page
// --------------------------------------------------

// Add option
add_option('twitter');
add_option('instagram');
add_option('headerimg');
 
// Update option
if ($_REQUEST['twitter']) update_option('twitter', $_REQUEST['twitter']);
if ($_REQUEST['instagram']) update_option('instagram', $_REQUEST['instagram']);
if ($_REQUEST['headerimg']) update_option('headerimg', $_REQUEST['headerimg']);

?>

<h2>やさしい設定</h2>

<form method="post" action="admin.php?page=theme_config">

    <table class="form-table">

        <tr valign="top">
            <th scope="row"><label for="twitter">Twitterアカウント</label></th>
            <td><input name="twitter" type="text" value="<?php echo get_option('twitter'); ?>" class="regular-text">
        </tr>
        <tr valign="top">
            <th scope="row"><label for="instagram">Instagramアカウント</label></label></th>
            <td><input name="instagram" type="text" value="<?php echo get_option('instagram'); ?>" class="regular-text">
        </tr>

        <tr valign="top">
                   <th scope="row"><label for="headerimg">ヘッダー画像のURL</label></label></th>
            <td><input name="headerimg" type="text" value="<?php echo get_option('headerimg'); ?>" class="regular-text">
        </tr>
    </table>

    <p class="submit">
        <input type="submit" name="submit" id="submit" class="button-primary" value="変更を保存">
    </p>

</form>