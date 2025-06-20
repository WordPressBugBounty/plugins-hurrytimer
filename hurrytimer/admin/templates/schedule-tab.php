<?php
namespace Hurrytimer;
global $post_id;
?>
<div id="hurrytimer-tabcontent-general" class="hurrytimer-tabcontent active">
    <table class="form-table">
        <tr class="form-field">
            <td><label for="hurrytimer-mode"><?php _e( "Mode", "hurrytimer" ) ?></label></td>
            <td>
                <label class="hurryt-mr-3 hurryt-text-md">
                    <input type="radio"
                           name="mode"
                           class="hurrytimer-mode"
                           id="hurrytModeRegular"
                           value="<?php echo C::MODE_REGULAR ?>"
                        <?php checked( $campaign->mode, C::MODE_REGULAR ) ?>
                    >
                    <?php _e( "One-time", "hurrytimer" ) ?>
                </label>
                <label class="hurryt-mr-3 hurryt-text-md">
                    <input type="radio"
                           name="mode"
                           class="hurrytimer-mode"
                           id="hurrytModeRecurring"
                           value="<?php echo C::MODE_RECURRING ?>"
                        <?php checked( $campaign->mode, C::MODE_RECURRING ) ?>
                    >
                    <?php _e( "Recurring", "hurrytimer" ) ?>
                </label>
                <label class="hurryt-mr-3 hurryt-text-md">
                    <input
                            type="radio"
                            name="mode"
                            class="hurrytimer-mode"
                            id="hurrytModeEvergreen"
                            value="<?php echo C::MODE_EVERGREEN ?>"
                        <?php checked( $campaign->mode, C::MODE_EVERGREEN ) ?>
                    >
                    <?php _e( "Evergreen", "hurrytimer" ) ?> <span
                            title="Set a dynamic countdown timer for each visitor."
                            class="hurryt-icon" data-icon="help"></span>

                </label>
            </td>
        </tr>
        <?php

    $saved_timezone = $campaign->timezone;

    $current_offset = get_option('gmt_offset');
    $tzstring       = get_option('timezone_string');

    // Remove outdated "Etc/GMT" mappings (WordPress does this).
    if (str_contains($tzstring, 'Etc/GMT')) {
        $tzstring = '';
    }

    // If no named timezone is set, convert GMT offset to UTC format.
    if (empty($tzstring)) {
        if ($current_offset == 0) {
            $tzstring = 'UTC+0';
        } elseif ($current_offset < 0) {
            $tzstring = 'UTC' . $current_offset;
        } else {
            $tzstring = 'UTC+' . $current_offset;
        }
    }
?>

      
    </table>
    <?php include( HURRYT_DIR . 'admin/templates/schedule-regular.php' ) ?>
    <?php include( HURRYT_DIR . 'admin/templates/schedule-evergreen.php' ) ?>
    <?php include( HURRYT_DIR . 'admin/templates/schedule-recurring.php' ) ?>
</div>
