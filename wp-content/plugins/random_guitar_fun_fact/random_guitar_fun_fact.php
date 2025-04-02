<?php
/*
Plugin Name: Random Guitar Fun Fact
Description: Displays a random guitar fun fact in the footer.
Version: 1.0
Author: Taha Hayat
*/

function random_guitar_fun_fact() {
    $facts = array(
        "The first electric guitar was created in 1931 by George Beauchamp.",
        "It is good practice to change your guitar strings every 2 months!",
    );


    $random_fact = $facts[array_rand($facts)];


    echo "<p style='text-align:center; font-style:italic;'>$random_fact</p>";
}

function add_random_guitar_fact_to_footer() {
    add_action('wp_footer', 'random_guitar_fun_fact');
}

add_action('init', 'add_random_guitar_fact_to_footer');
?>
