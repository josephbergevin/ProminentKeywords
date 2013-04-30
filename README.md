ProminentKeywords
=============

ProminentKeywords is a PHP class built to show the most prominently used words in a given block of text.

Setup
-----

The ScraperMoreFaster.php file found in the lib folder is the only file needed to use this class.

Usage
-----

### Defining the Content to be Parsed

	$pkw = new ProminentKeywords;
	$pkw->__set('content', $content);

### Define the Max # of Words in a Keyword Combo

	$pkw->__set('kw_combo_max', 3);

**This will return list for 1-word, 2-word and 3-word combos**

### Return the Prominent Keywords Array

	$pkw->returnResult();

Examples
--------

See smf_tester.php for example usage.