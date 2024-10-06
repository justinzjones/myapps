<?php
// Function to extract the first N sentences from a given text
function get_excerpt($content, $numSentences, $ignoreChars) {
    // Strip any HTML tags from the content to avoid displaying raw HTML
    $cleanContent = strip_tags($content);

    // Split the content into sentences
    $sentences = preg_split('/(?<=[.?!])\s+/', $cleanContent, -1, PREG_SPLIT_NO_EMPTY);

    // Get the specified number of sentences for the excerpt
    $excerpt = implode(' ', array_slice($sentences, 0, $numSentences));

    // Ignore the first N characters as specified
    $excerpt = substr($excerpt, $ignoreChars);

    return $excerpt;
}