<?php function get_demo_element_html($text){ ?>
    <?php $html = '';?>
    <?php ob_start();?>
    <!--start content-->
    <p><?php echo $text ?></p>
    <!--end content-->
    <?php $html = ob_get_contents();?>
    <?php ob_end_clean();?>
    <?php return $html;?>
<?php } ?>
