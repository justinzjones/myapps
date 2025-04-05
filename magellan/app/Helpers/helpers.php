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

function insert_ads_in_content($content) {
    // Split content into sentences
    $sentences = preg_split('/(?<=[.?!])\s+(?=[A-Z])/', $content, -1, PREG_SPLIT_NO_EMPTY);
    
    $currentWordCount = 0;
    $currentChunk = [];
    $output = '';
    
    foreach ($sentences as $sentence) {
        // Count words in sentence (without HTML)
        $cleanSentence = strip_tags($sentence);
        $words = explode(' ', trim($cleanSentence));
        $wordCount = count($words);
        
        // Start new chunk if adding this sentence would exceed 200 words
        if ($currentWordCount + $wordCount > 400 && !empty($currentChunk)) {
            $output .= implode(' ', $currentChunk);
            $output .= '<div class="mt-4 mb-4"> <div class="p-4 my-12 bg-gray-50 rounded-lg border border-gray-200">
                <h3 class="mb-2 text-lg font-semibold">Sponsored Content</h3>
                <p class="text-gray-600">Advertisement placeholder</p>
            </div> </div>';
            $currentChunk = [];
            $currentWordCount = 0;
        }
        
        $currentChunk[] = $sentence;
        $currentWordCount += $wordCount;
    }
    
    // Add remaining content
    $output .= implode(' ', $currentChunk);
    
    return $output;
}