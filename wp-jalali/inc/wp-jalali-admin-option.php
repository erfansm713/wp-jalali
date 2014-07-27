<?php
/**
 * admin options page
 */

global $ztjalali_option;
if (isset($_POST['save_wper_options'])) {
    check_admin_referer('jalali_save_options');
    $ztjalali_option = array(
        'force_locale' => !empty($_POST['force_locale']),
        'force_timezone' => !empty($_POST['force_timezone']),
        'change_date_to_jalali' => !empty($_POST['change_date_to_jalali']),
        'change_jdate_number_to_persian' => !empty($_POST['change_jdate_number_to_persian']),
        'change_url_date_to_jalali' => !empty($_POST['change_url_date_to_jalali']),
        'afghan_month_name' => !empty($_POST['afghan_month_name']),
        'change_title_number_to_persian' => !empty($_POST['change_title_number_to_persian']),
        'change_content_number_to_persian' => !empty($_POST['change_content_number_to_persian']),
        'change_excerpt_number_to_persian' => !empty($_POST['change_excerpt_number_to_persian']),
        'change_comment_number_to_persian' => !empty($_POST['change_comment_number_to_persian']),
        'change_commentcount_number_to_persian' => !empty($_POST['change_commentcount_number_to_persian']),
        'change_category_number_to_persian' => !empty($_POST['change_category_number_to_persian']),
        'change_point_to_persian' => !empty($_POST['change_point_to_persian']),
        'change_arabic_to_persian' => !empty($_POST['change_arabic_to_persian']),
        'change_archive_title' => !empty($_POST['change_archive_title']),
        'save_changes_in_db' => !empty($_POST['save_changes_in_db']),
        'persian_planet' => !empty($_POST['persian_planet']),
    );
    update_option('ztjalali_options', json_encode($ztjalali_option))
    OR add_option('ztjalali_options', json_encode($ztjalali_option));
}
?>

<div class="wrap">
    <h2><?php _e('wp persian option', 'ztjalali'); ?></h2>

    <form method="post">
        <?php wp_nonce_field('jalali_save_options'); ?> 
        <table class="form-table">
            <tbody>
                <tr>
                    <td colspan="2">
                        <h3 class="title"><?php _e('locale option', 'ztjalali'); ?></h3>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><?php _e('force locale', 'ztjalali'); ?></th>
                    <td> 
                        <fieldset>
                            <legend class="screen-reader-text"><span><?php _e('force locale', 'ztjalali'); ?></span></legend>
                            <label for="force_locale">
                                <input type="checkbox" id="force_locale" name="force_locale" value="1" <?php checked($ztjalali_option['force_locale'], TRUE); ?> />
                                <?php _e('force locale Description', 'ztjalali'); ?>
                            </label>
                        </fieldset>
                    </td>
                </tr>

                <tr>
                    <th scope="row"><?php _e('force timezone', 'ztjalali'); ?></th>
                    <td> 
                        <fieldset>
                            <legend class="screen-reader-text"><span><?php _e('force timezone', 'ztjalali'); ?></span></legend>
                            <label for="force_timezone">
                                <input type="checkbox" id="force_timezone" name="force_timezone" value="1" <?php checked($ztjalali_option['force_timezone'], TRUE); ?> />
                                <?php _e('force timezone Description', 'ztjalali'); ?>
                            </label>
                        </fieldset>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <h3 class="title"><?php _e('date option', 'ztjalali'); ?></h3>
                    </td>
                </tr>

                <tr>
                    <th scope="row"><?php _e('change_date_to_jalali', 'ztjalali'); ?></th>
                    <td> 
                        <fieldset>
                            <legend class="screen-reader-text"><span><?php _e('change_date_to_jalali', 'ztjalali'); ?></span></legend>
                            <label for="change_date_to_jalali">
                                <input type="checkbox" id="change_date_to_jalali" name="change_date_to_jalali" value="1" <?php checked($ztjalali_option['change_date_to_jalali'], TRUE); ?> />
                                <?php _e('change_date_to_jalali Description', 'ztjalali'); ?>
                            </label>
                        </fieldset>
                    </td>
                </tr>

                <tr>
                    <th scope="row"><?php _e('change_jdate_number_to_persian', 'ztjalali'); ?></th>
                    <td> 
                        <fieldset>
                            <legend class="screen-reader-text"><span><?php _e('change_jdate_number_to_persian', 'ztjalali'); ?></span></legend>
                            <label for="change_jdate_number_to_persian">
                                <input type="checkbox" id="change_jdate_number_to_persian" name="change_jdate_number_to_persian" value="1" <?php checked($ztjalali_option['change_jdate_number_to_persian'], TRUE); ?> />
                                <?php _e('change_jdate_number_to_persian Description', 'ztjalali'); ?>
                            </label>
                        </fieldset>
                    </td>
                </tr>

                <tr>
                    <th scope="row"><?php _e('change_url_date_to_jalali', 'ztjalali'); ?></th>
                    <td> 
                        <fieldset>
                            <legend class="screen-reader-text"><span><?php _e('change_url_date_to_jalali', 'ztjalali'); ?></span></legend>
                            <label for="change_url_date_to_jalali">
                                <input type="checkbox" id="change_url_date_to_jalali" name="change_url_date_to_jalali" value="1" <?php checked($ztjalali_option['change_url_date_to_jalali'], TRUE); ?> />
                                <?php _e('change_url_date_to_jalali Description', 'ztjalali'); ?>
                            </label>
                        </fieldset>
                    </td>
                </tr>

                <tr>
                    <th scope="row"><label for="afghan_month_name"><?php _e('month_name', 'ztjalali'); ?></label></th>
                    <td>
                        <select id="afghan_month_name" name="afghan_month_name">
                            <option <?php selected($ztjalali_option['afghan_month_name'], FALSE); ?> value="0"><?php _e('iran', 'ztjalali'); ?></option>
                            <option <?php selected($ztjalali_option['afghan_month_name'], TRUE); ?> value="1"><?php _e('afghanistan', 'ztjalali'); ?></option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <h3 class="title"><?php _e('number option', 'ztjalali'); ?></h3>
                    </td>
                </tr>

                <tr>
                    <th scope="row"><?php _e('change_title_number_to_persian', 'ztjalali'); ?></th>
                    <td> 
                        <fieldset>
                            <legend class="screen-reader-text"><span><?php _e('change_title_number_to_persian', 'ztjalali'); ?></span></legend>
                            <label for="change_title_number_to_persian">
                                <input type="checkbox" id="change_title_number_to_persian" name="change_title_number_to_persian" value="1" <?php checked($ztjalali_option['change_title_number_to_persian'], TRUE); ?> />
                                <?php _e('change_title_number_to_persian Description', 'ztjalali'); ?>
                            </label>
                        </fieldset>
                    </td>
                </tr>

                <tr>
                    <th scope="row"><?php _e('change_content_number_to_persian', 'ztjalali'); ?></th>
                    <td> 
                        <fieldset>
                            <legend class="screen-reader-text"><span><?php _e('change_content_number_to_persian', 'ztjalali'); ?></span></legend>
                            <label for="change_content_number_to_persian">
                                <input type="checkbox" id="change_content_number_to_persian" name="change_content_number_to_persian" value="1" <?php checked($ztjalali_option['change_content_number_to_persian'], TRUE); ?> />
                                <?php _e('change_content_number_to_persian Description', 'ztjalali'); ?>
                            </label>
                        </fieldset>
                    </td>
                </tr>

                <tr>
                    <th scope="row"><?php _e('change_excerpt_number_to_persian', 'ztjalali'); ?></th>
                    <td> 
                        <fieldset>
                            <legend class="screen-reader-text"><span><?php _e('change_excerpt_number_to_persian', 'ztjalali'); ?></span></legend>
                            <label for="change_excerpt_number_to_persian">
                                <input type="checkbox" id="change_excerpt_number_to_persian" name="change_excerpt_number_to_persian" value="1" <?php checked($ztjalali_option['change_excerpt_number_to_persian'], TRUE); ?> />
                                <?php _e('change_excerpt_number_to_persian Description', 'ztjalali'); ?>
                            </label>
                        </fieldset>
                    </td>
                </tr>

                <tr>
                    <th scope="row"><?php _e('change_comment_number_to_persian', 'ztjalali'); ?></th>
                    <td> 
                        <fieldset>
                            <legend class="screen-reader-text"><span><?php _e('change_comment_number_to_persian', 'ztjalali'); ?></span></legend>
                            <label for="change_comment_number_to_persian">
                                <input type="checkbox" id="change_comment_number_to_persian" name="change_comment_number_to_persian" value="1" <?php checked($ztjalali_option['change_comment_number_to_persian'], TRUE); ?> />
                                <?php _e('change_comment_number_to_persian Description', 'ztjalali'); ?>
                            </label>
                        </fieldset>
                    </td>
                </tr>

                <tr>
                    <th scope="row"><?php _e('change_commentcount_number_to_persian', 'ztjalali'); ?></th>
                    <td> 
                        <fieldset>
                            <legend class="screen-reader-text"><span><?php _e('change_commentcount_number_to_persian', 'ztjalali'); ?></span></legend>
                            <label for="change_commentcount_number_to_persian">
                                <input type="checkbox" id="change_commentcount_number_to_persian" name="change_commentcount_number_to_persian" value="1" <?php checked($ztjalali_option['change_commentcount_number_to_persian'], TRUE); ?> />
                                <?php _e('change_commentcount_number_to_persian Description', 'ztjalali'); ?>
                            </label>
                        </fieldset>
                    </td>
                </tr>

                <tr>
                    <th scope="row"><?php _e('change_category_number_to_persian', 'ztjalali'); ?></th>
                    <td> 
                        <fieldset>
                            <legend class="screen-reader-text"><span><?php _e('change_category_number_to_persian', 'ztjalali'); ?></span></legend>
                            <label for="change_category_number_to_persian">
                                <input type="checkbox" id="change_category_number_to_persian" name="change_category_number_to_persian" value="1" <?php checked($ztjalali_option['change_category_number_to_persian'], TRUE); ?> />
                                <?php _e('change_category_number_to_persian Description', 'ztjalali'); ?>
                            </label>
                        </fieldset>
                    </td>
                </tr>

                <tr>
                    <th scope="row"><?php _e('change_point_to_persian', 'ztjalali'); ?></th>
                    <td> 
                        <fieldset>
                            <legend class="screen-reader-text"><span><?php _e('change_point_to_persian', 'ztjalali'); ?></span></legend>
                            <label for="change_point_to_persian">
                                <input type="checkbox" id="change_point_to_persian" name="change_point_to_persian" value="1" <?php checked($ztjalali_option['change_point_to_persian'], TRUE); ?> />
                                <?php _e('change_point_to_persian Description', 'ztjalali'); ?>
                            </label>
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <h3 class="title"><?php _e('text option', 'ztjalali'); ?></h3>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><?php _e('change_arabic_to_persian', 'ztjalali'); ?></th>
                    <td> 
                        <fieldset>
                            <legend class="screen-reader-text"><span><?php _e('change_arabic_to_persian', 'ztjalali'); ?></span></legend>
                            <label for="change_arabic_to_persian">
                                <input type="checkbox" id="change_arabic_to_persian" name="change_arabic_to_persian" value="1" <?php checked($ztjalali_option['change_arabic_to_persian'], TRUE); ?> />
                                <?php _e('change_arabic_to_persian Description', 'ztjalali'); ?>
                            </label>
                        </fieldset>
                    </td>
                </tr>
                
                <tr>
                    <th scope="row"><?php _e('change_archive_title', 'ztjalali'); ?></th>
                    <td> 
                        <fieldset>
                            <legend class="screen-reader-text"><span><?php _e('change_archive_title', 'ztjalali'); ?></span></legend>
                            <label for="change_archive_title">
                                <input type="checkbox" id="change_archive_title" name="change_archive_title" value="1" <?php checked($ztjalali_option['change_archive_title'], TRUE); ?> />
                                <?php _e('change_archive_title Description', 'ztjalali'); ?>
                            </label>
                        </fieldset>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2">
                        <h3 class="title"><?php _e('wp-jalali option', 'ztjalali'); ?></h3>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><?php _e('save_changes_in_db', 'ztjalali'); ?></th>
                    <td> 
                        <fieldset>
                            <legend class="screen-reader-text"><span><?php _e('save_changes_in_db', 'ztjalali'); ?></span></legend>
                            <label for="save_changes_in_db">
                                <input type="checkbox" id="change_archive_title" name="save_changes_in_db" value="1" <?php checked($ztjalali_option['save_changes_in_db'], TRUE); ?> />
                                <?php _e('save_changes_in_db Description', 'ztjalali'); ?>
                            </label>
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label for="persian_planet"><?php _e('persian_planet', 'ztjalali'); ?></label></th>
                    <td>
                        <select id="persian_planet" name="persian_planet">
                            <option <?php selected($ztjalali_option['persian_planet'], FALSE); ?> value="0"><?php _e('wp-persian news Blog', 'ztjalali'); ?></option>
                            <option <?php selected($ztjalali_option['persian_planet'], TRUE); ?> value="1"><?php _e('wp-persian planet', 'ztjalali'); ?></option>
                        </select>
                    </td>
                </tr>
                <?php
                /* ===================================================== * /
                 * input text example
                  <tr>
                  <th scope="row"><label for="blogdescription">معرفی کوتاه</label></th>
                  <td><input type="text" class="regular-text" value="Just another WordPress site" id="blogdescription" name="blogdescription">
                  <p class="description">در چند واژه بیان کنید که &zwnj;این سایت  درباره&zwnj;ی چیست</p></td>
                  </tr>
                  /* ===================================================== */
                ?>
            </tbody>
        </table>
        <p class="submit">
            <input type="submit" value="<?php _e('save changes', 'ztjalali'); ?>" class="button button-primary" id="save_wper_options" name="save_wper_options">
        </p>
    </form>
</div>