<a tabindex="<?php
                if ($tabIndex) {
                    echo $tabIndex;
                } else {
                    echo 0;
                }
                ?>" href="<?php echo $url; ?>" target="
<?php
if ($target_blank) {
    echo $target_blank;
};
?>
" class="focus:outline-none focus:ring-1 focus:ring-accent-50 | inline-flex bg-theme-clr-call-to-action hover:bg-primary-alt dark:hover:bg-black/15 text-black dark:hover:text-white dark:hover:border dark:hover:border-white font-semibold shadow-md rounded-s-full rounded-e-full py-2 px-6 uppercase">
    <?php echo $label; ?>
</a>