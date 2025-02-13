<?php namespace Hurrytimer; ?>

 <table class="hurrytimer-standard form-table hidden mode-settings" data-for="hurrytModeRegular">
<tr class="form-field hurrytimer-enddate-field" >
            <td><label><?php _e("End date/time", "hurrytimer") ?></label></label></td>
            <td>
                <label for="hurrytimer-end-datetime" class="date">
                    <input type="text" name="end_datetime" autocomplete="off"
                           id="hurrytimer-end-datetime"
                           class="hurrytimer-datepicker hurryt-w-full"
                           value="<?php echo $campaign->endDatetime ?>"
                    >
                </label>
            </td>
        </tr>
        <tr class="form-field hurrytimer-timezone-field">
            <td><label for="hurrytimer-timezone">Timezone</label>
        </td>
            <td>
        
                    <select name="timezone" class="hurryt-w-full" disabled>
                        <?php echo wp_timezone_choice($saved_timezone, get_user_locale()); ?>
                    </select>
                        <?php // removeIf(pro) ?>
                        <p class="description">
                        <?php esc_html_e('Timezone customization is a PRO feature.', 'hurrytimer') ?> <a href="https://hurrytimer.com"><?php esc_html_e('Upgrade now', 'hurrytimer') ?></a>.
                        </p>
                        <?php // endRemoveIf(pro) ?>

                        <p class="description">
                        Note: By default, the site's timezone is used.
                        </p>

                      
              
            </td>
        </tr>
        
 </table>
