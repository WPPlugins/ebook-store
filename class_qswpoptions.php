<?php
class QSWPOptions
{
    var $paypal_currency = 'USD';
    var $paypal_return_button_text = 'Click here to go to download page';
    var $paypal_verify_transactions = 0;
    var $link_expiration = '1 year';
    var $email_delivery = 1;
    var $downloads_limit = 5;
    var $ebook_store_require_shipping = 0;
    var $thankyou_page = '<h1>Thank you for your order %%first_name%% %%last_name%%!</h1>
<p>You have successfully completed the order process! Please use the link(s) below to download your copy:</p>
<p><strong>Use the link below the start the download:</strong> <a href="%%downloadlink%%" target="_blank">%%item_name%%</a> (%%filesize%%)</p>
<p><strong>Other formats of the ebook:</strong> %%download_links%%</p>
<p>%%ebook_bonus%%</p>
<h3>Details for your order:</h3>
<p>Order #: %%order_id%%<br />Transaction: %%txn_id%%<br />Amount: %%mc_currency%% %%mc_gross%%</p>
<p><strong>Your password is: %%password%%</strong></p>
<p>Thank you!</p>';
    var $email_delivery_text = '<p>Thank you for your order %%first_name%% %%last_name%%!</p>
<p>You have successfully completed the order process!</p>
<p>Please use the link(s) below to download your copy:</p>
<p>%%downloadlink%%</p>
<p>Details for your order:<br />Order #: %%order_id%%<br />Transaction: %%txn_id%%<br />Amount: %%mc_currency%% %%mc_gross%%</p>
<p>Your password is: %%password%%</p>
<p>Thank you!</p>';
    var $buyer_info_text = 'Licensed to: %%first_name%% %%last_name%% (%%residence_country%%), %%payer_email%% YourCompany - all rights reserved.';
    var $buyer_info = 1;
    var $formContent = '<form class="form-horizontal"><fieldset><!-- Form Name --> <legend>Your Details</legend><!-- Text input--><div class="form-group"><label class="col-md-4 control-label" for="name">Name</label><div class="col-md-4"><input id="name" class="form-control input-md" name="name" required="" type="text" placeholder="e.g. John Smith" /></div></div><!-- Text input--><div class="form-group"><label class="col-md-4 control-label" for="email">Email</label><div class="col-md-4"><input id="email" class="form-control input-md" name="email" required="" type="text" placeholder="your@email.com" /></div></div><!-- Button --><div class="form-group"><label class="col-md-4 control-label" for="submit">Submit form and download</label><div class="col-md-4"><button id="submit" class="btn btn-primary" name="submit">Submit</button></div></div></fieldset></form>';
    var $email_delivery_subject = 'Email Delivery - Order complete!';
    var $ebook_store_owner_password = '';
    var $mailchimp_api_key = '';
    var $ebook_store_license_key = '';
    var $ebook_store_random_password = '';
    var $ebook_store_locale = 'en';
    var $ebook_store_buy_link_font_size = '0.65em;';
    var $ebook_store_title_font_size = '1.8em;';
    var $ebook_store_blank_password = 1;
    var $ebook_store_woocommerce_integration = 0;
    var $ebook_store_allow_echeck = 0;
    var $form_scale = 1;
    var $ebook_store_woocommerce_integration_no_added_to_cart = 0;
    var $ebook_store_woocommerce_required_order_status = '0';
    var $ebook_store_disable_cover_buy_now = 0;
    var $ebook_store_hide_buy_now = 0;
    var $ebook_store_watermark_color_hex = '#FF0000';
    var $ebook_store_buyer_info_position = 'top';
}