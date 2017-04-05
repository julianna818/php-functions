<?php 

/**
 * Echos sorbet ingredient.
 *
 * @param Type of sorbet
 */

function makeSorbet($type) {
  if ($type == 'mango') {
    echo '<p> Mango sorbet is made with fresh mangos, sugar and water, blended into a cold and smooth creation.</p>';
  } else if ($type == 'berry') {
    echo '<p>Raspberries, blueberries and strawberries make for a nutricious and delicious treat.</p>';
  } else {
    echo '<p>That&rsquo;s not a sorbet or any kind of desert.</p>';
  }
}