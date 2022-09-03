<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

//print_r( $wtnSettingsContent );
foreach ( $wtnSettingsContent as $option_name => $option_value ) {
    if ( isset( $wtnSettingsContent[$option_name] ) ) {
        ${"" . $option_name}  = $option_value;
    }
}
?>
<form name="wbg_general_settings_form" role="form" class="form-horizontal" method="post" action="" id="wbg-general-settings-form">
    <table class="wbg-gallery-conent-settings-table">
        <tbody>
        <tr>
            <th scope="row">
                <label><?php _e('Order With', 'wp-top-news'); ?>:</label>
            </th>
            <td>
                <select name="wbg_gallary_sorting" class="medium-text">
                    <option value="">--<?php _e('Select One', 'wp-top-news'); ?>--</option>
                    <option value="title" <?php echo ( 'title' === $wbg_gallary_sorting ) ? 'selected' : ''; ?> ><?php _e('Name', WBG_TXT_DOMAIN); ?></option>
                    <option value="date" <?php echo ( 'date' === $wbg_gallary_sorting ) ? 'selected' : ''; ?> ><?php _e('Date', WBG_TXT_DOMAIN); ?></option>
                    <option value="menu_order" <?php echo ( 'menu_order' === $wbg_gallary_sorting ) ? 'selected' : ''; ?> ><?php _e('Post Order', WBG_TXT_DOMAIN); ?></option>
                </select>
            </td>
            <th scope="row">
                <label for="wbg_books_order"><?php _e('Order By', 'wp-top-news'); ?>:</label>
            </th>
            <td>
                <input type="radio" name="wbg_books_order" id="wbg_books_order_a" value="ASC" <?php echo ( 'DESC' !== $wbg_books_order ) ? 'checked' : ''; ?> >
                <label for="wbg_books_order_a"><span></span><?php _e( 'Ascending', 'wp-top-news' ); ?></label>
                    &nbsp;&nbsp;
                <input type="radio" name="wbg_books_order" id="wbg_books_order_d" value="DESC" <?php echo ( 'DESC' === $wbg_books_order ) ? 'checked' : ''; ?> >
                <label for="wbg_books_order_d"><span></span><?php _e( 'Descending', 'wp-top-news' ); ?></label>
            </td>
        </tr>
        </tbody>
    </table>
</form>