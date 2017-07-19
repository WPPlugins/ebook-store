<?php settings_fields( 'ebook-settings-group-integrations' ); ?>
<?php do_settings_sections( 'ebook-settings-group-integrations' ); ?>
        <tr valign="top" class="goPro">
        <th scope="row"><?php echo __('Upgrade to Pro', 'ebook-store'); ?></span></th>
        <td><?php echo __('These features are available in the Pro version, which you can find', 'ebook-store'); ?> <a href="http://www.shopfiles.com/index.php/products/wordpress-ebook-store" target="_blank" colspan="2"><?php echo __('here', 'ebook-store'); ?></a></td>
        </tr>

        <tr valign="top" class="goPro">
        <th colspan="2" scope="row"> </th>
        </tr>

        <tr valign="top" class="goPro">
        <th scope="row" class="goPro"><?php echo __('Integrate with WooCommerce', 'ebook-store'); ?></span></th>
        <td><input type="checkbox" name="ebook_store_woocommerce_integration"  value="1" <?php echo (get_option('ebook_store_woocommerce_integration') != 0 ? 'checked="checked"' : ''); ?> /><span class="description">
            <?php echo __('This feature will let you assign ebook store items to your WooCommerce products which lets you benefit from the PDF protection features of the plugin but also use all payment gateways available for WooCommerce.', 'ebook-store'); ?><br /> <a href="https://www.youtube.com/watch?v=dJTvA0-lGmI" target="_blank"><?php echo __('See video demo of WooCommerce integration', 'ebook-store'); ?></a>
        </span></td>
        </tr>
     
        <tr valign="top" class="goPro">
        <th scope="row" class="goPro"><?php echo __('Hide WooCommerce Added To Cart Message', 'ebook-store'); ?></span></th>
        <td><input type="checkbox" name="ebook_store_woocommerce_integration_no_added_to_cart"  value="1" <?php echo (get_option('ebook_store_woocommerce_integration_no_added_to_cart') != 0 ? 'checked="checked"' : ''); ?> /><span class="description">
            <?php echo __('If this feature is enabled, no message will be displayed when item is added to WooCommerce cart if integration with WooCommerce is enabled.'); ?>
        </span></td>
        </tr>

        <tr valign="top" class="goPro">
        <th scope="row" class="goPro"><?php echo __('Require specific order status in WooCommerce for Downloads', 'ebook-store'); ?></span></th>
        <td>
        <select name="ebook_store_woocommerce_required_order_status">
        <?php 
        //echo get_option('paypal_account');
        //processing, pending, on-hold, completed, cancelled, refunded, failed
        $wc_order_status = array(
                '0' => __('Optional','woocommerce'),
                'completed' => __('Completed','woocommerce'),
                'pending' => __('Pending Payment','woocommerce'),
                'processing' => __('Processing','woocommerce'),
                'on-hold' => __('On Hold','woocommerce'),
                'cancelled' => __('Canceled','woocommerce'),
            );
        foreach ($wc_order_status as $status => $name) {
            $selected = '';
            if ($status == get_option('ebook_store_woocommerce_required_order_status', '0')) {
                $selected = ' selected';
            }
            echo "<option value=\"$status\"$selected>$name</option>";
        }
        ?>
        </select>

        <span class="description">
            <?php echo __('If you select a specific order status, the Downloads table will show only if the status matches the one specified here.'); ?>
        </span></td>
        </tr>
     
        <tr valign="top" class="goPro">
        <th scope="row"><?php echo __('Integrate with WP Affiliates Manager', 'ebook-store'); ?></span></th>
        <td><input type="checkbox" name="ebook_store_wp_affiliate_integration"  value="1" <?php echo (get_option('ebook_store_wp_affiliate_integration') != 0 ? 'checked="checked"' : ''); ?> /><span class="description">
            <?php echo __('Enable integration with', 'ebook-store'); ?> <a href="https://wordpress.org/plugins/affiliates-manager/" target="_blank">WP Affiliates Manager</a> <?php echo __('and pay commissions to affiliates that promote your ebook', 'ebook-store'); ?>.
        </span></td>
        </tr>

        <tr valign="top" class="goPro">
        <th scope="row"><?php echo __('Fill a form upon order', 'ebook-store'); ?>
        </th>
        <td><input type="checkbox" name="formEnabled"  value="1" <?php echo (get_option('formEnabled') != 0 ? 'checked="checked"' : ''); ?> /><span class="description"><?php echo __('If this feature is enabled the user will be asked to fill in a form with more details, the form you can edit as you wish with your own html editor and paste the code on this page\'s section with the form content.', 'ebook-store'); ?></span></td>
        </tr>
        <tr valign="top" class="goPro">
        <th scope="row"><?php echo __('Disable cover clicking', 'ebook-store'); ?>
        </th>
        <td><input type="checkbox" name="ebook_store_disable_cover_buy_now"  value="1" <?php echo (get_option('ebook_store_disable_cover_buy_now') != 0 ? 'checked="checked"' : ''); ?> /><span class="description"><?php echo __('This can be enabled in combination with the option below, to prevent standalone orders and use only WooCommerce cart.', 'ebook-store'); ?></span></td>
        </tr>
        </tr>
        <tr valign="top" class="goPro">
        <th scope="row"><?php echo __('Hide Buy Now button', 'ebook-store'); ?>
        </th>
        <td><input type="checkbox" name="ebook_store_hide_buy_now"  value="1" <?php echo (get_option('ebook_store_hide_buy_now') != 0 ? 'checked="checked"' : ''); ?> /><span class="description"><?php echo __('This feature is useful when WooCommerce integration is used and you want to disallow standalone orders', 'ebook-store'); ?></span></td>
        </tr>
        </tr>
        <tr valign="top" class="goPro">
        <th scope="row"><?php echo __('Require @kindle.com email for delivery', 'ebook-store'); ?>
        </th>
        <td><input type="checkbox" name="kindleDelivery"  value="1" <?php echo (get_option('kindleDelivery') != 0 ? 'checked="checked"' : ''); ?> /><span class="description"><?php echo __('You can use that with combination of "Fill a form feature" to get the kindle email of the user (use field name "kindle_email").', 'ebook-store'); ?></span></td>
        </tr>
