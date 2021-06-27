 <?php
add_shortcode('test_plugin_b', 'test_plugin_b_dothing');
function test_plugin_b_init() {
  function test_plugin_b_dothing() {
    $output = 'Ich bin das Test-Plugin B und ich funktioniere ebenfalls!';
    return $output;
  }
}
add_action('init', 'test_plugin_b_dothing');
?>
