<?php
add_action ( 'wp_head', 'my_js_variables' );
function my_js_variables(){ 

 //for specific page templates
 $current_template =  get_page_template();

// return if there is no page template
 if( !isset($current_template) ){  return; } ?>
  <script type="text/javascript">
    var _datMenuEffect = <?php echo json_encode( $GLOBALS['reynoldscenter']['menu_effect'] ); ?>;      
  </script>
<?php
}
