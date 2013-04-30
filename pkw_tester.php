<?php

require_once("lib/ProminentKeywords.php");

// taken from: http://en.wikipedia.org/wiki/Content_(media)
$content = "The author, producer or publisher of an original source of information or experiences may or may not be directly responsible for the entire value that they attain as content in a specific context. For example, part of an original article (such as a headline from a news story) may be rendered on another web page displaying the results of a user's search engine query grouped with headlines from other news publications and related advertisements. The value that the original headline has in this group of query results may be very different from the value that it had in its original article.
It is possible for a person to derive their own value from content in ways that the author didn't plan or imagine. User innovation makes it possible for users to develop their own content from existing content.
Not all information content requires creative authoring or editing. Through recent technological developments such as mobile phones and automated sensors that can record events anywhere for publishing and converting to potentially reach a global audience on channels such as YouTube, most recorded or transmitted information and experiences, can be deemed content.";

$pkw = New ProminentKeywords;

$pkw->__set('kw_combo_max', 3);
$pkw->__set('content', $content);


echo "<pre>";
print_r($pkw->returnResult());
echo "</pre>";

