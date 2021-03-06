<?php
/* vim: set filetype=css : */
header('Content-Type: text/css');
?>
/*
    Copyright 2018 Chris McKinney

    Licensed under the Apache License, Version 2.0 (the "License"); you may not
    use this file except in compliance with the License.  You may obtain a copy
    of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.
 */
/*<?php
// White, Black, Red, Yellow, Green, Blue, Brown, Pink, RGB
$presets = array(
    'default' => array(
        'bg' => '#eee',
        'text' => '#111',
        'link' => '#33c',
        'head' => '#555'
    ),
    'red' => array(
        'bg' => '#eeeaec',
        'text' => '#311',
        'link' => '#c33',
        'head' => '#755'
    ),
    'legal' => array(
        'bg' => '#eeb',
        'text' => '#115',
        'link' => '#55c',
        'head' => '#556'
    ),
    'celery' => array(
        'bg' => '#cea',
        'text' => '#021',
        'link' => '#a33',
        'head' => '#655'
    ),
    'periwinkle' => array(
        'bg' => '#cce',
        'text' => '#111',
        'link' => '#55e',
        'head' => '#559'
    ),
    'tapioca' => array(
        'bg' => '#eed',
        'text' => '#433',
        'link' => '#a33',
        'head' => '#753'
    ),
    'salmon' => array(
        'bg' => '#eaa',
        'text' => '#211',
        'link' => '#737',
        'head' => '#655'
    ),
    'colorful' => array(
        'bg' => '#cde',
        'text' => '#040',
        'link' => '#c33',
        'head' => '#559'
    ),
    'bold' => array(
        'bg' => '#c0b3a0',
        'text' => '#22252c',
        'link' => '#e14658',
        'head' => '#3f3250'
    ),
    'neon' => array(
        'bg' => '#e7dfdd',
        'text' => '#0e0b16',
        'link' => '#4717f6',
        'head' => '#a239ca'
    ),
    'clean' => array(
        'bg' => '#efefef',
        'text' => '#545454',
        'link' => '#ff3b3f',
        'head' => '#aadbf2'
    ),
);

// Determine the preset to use.
if (array_key_exists('preset', $_GET)
        && array_key_exists($_GET['preset'], $presets)) {
    // A preset was specified in the URL.
    $presetName = $_GET['preset'];
    // Gets echoed into CSS comment.
    echo "Loaded $presetName preset.\n";
} else {
    // No preset was specified in the URL.
    $presetName = 'default';
    echo "Falling back to $presetName preset.\n";
}

function define_var(&$var, $name) {
    // Overwrite var if custom provided in URL.
    global $presets, $presetName;
    if (array_key_exists($name, $_GET)) {
        $var = $_GET[$name];
        echo "Custom var $name = $var\n";
    } else {
        $var = $presets[$presetName][$name];
        echo "Preset var $name = $var\n";
    }
}

function is_flagged($name) {
    return (array_key_exists($name, $_GET) && strlen($_GET[$name]) > 0
            && array_key_exists(strtolower($_GET[$name][0]),
                    array('y' => 0, 't' => 0, '1' => 0)));
}

// Load variables.
define_var($bg, 'bg');
define_var($text, 'text');
define_var($link, 'link');
define_var($head, 'head');

if (is_flagged('caleb')) {
    $head = $link;
}
if (is_flagged('dark')) {
    $tmp = $text;
    $text = $bg;
    $bg = $tmp;
}

function hexrgb($hexColor) {
    $short = (strlen($hexColor) == 4);
    list($r, $g, $b) = sscanf($hexColor, $short ? '#%1s%1s%1s' : '#%2s%2s%2s');
    return array(
        'r' => hexdec($short ? "$r$r" : $r),
        'g' => hexdec($short ? "$g$g" : $g),
        'b' => hexdec($short ? "$b$b" : $b)
    );
}

function islight($rgb) {
    return $rgb['r'] > 0x7f && $rgb['g'] > 0x7f && $rgb['b'] > 0x7f;
}

?>*/

@import url('https://fonts.googleapis.com/css?family=Slabo+13px');
@import url('https://fonts.googleapis.com/css?family=Slabo+27px');

.theme-colors {
    background-color: <?=$bg?>;
    color: <?=$text?>;
}
.theme-inverted {
    background-color: <?=$text?>;
    color: <?=$bg?>;
}

.card.theme-colors .card-header, .card.theme-inverted .card-header {
    background-color: <?=$head?>;
    color: <?=(is_flagged('dark') xor islight(hexrgb($head))) ? $text : $bg?>;
}

.btn.theme-colors:hover, .btn.theme-inverted:hover {
    color: <?=$bg?> !important;
    background-color: <?=$link?>;
}
.btn-link, .btn-link:hover {
    color: <?=$link?>;
}

.dropdown-menu.theme-colors .dropdown-item:hover {
    color: <?=$link?>;
    background-color: <?=$text?>;
}
.dropdown-menu.theme-inverted .dropdown-item:hover {
    color: <?=$link?>;
    background-color: <?=$bg?>;
}
.navbar-toggler {
    color: <?=$link?>;
    border-color: <?=$link?>;
}
.navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='<?=urlencode($link)?>' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}
@media (max-width: 575.98px) {
    #inner-nav {
        width: 100%;
    }
}

.dropdown-menu ul {
    padding: 0px;
    list-style: none;
}
.dropdown-menu ul li {
    padding: 0px;
}

body {
    color: <?=$text?>;
    background-color: <?=$bg?>;
    background-image: url("background.svg");
    font-family: 'Slabo 13px', serif;
}
h1, h2, h3, h4, h5, h6 {
    color: <?=$head?> !important;
    font-family: 'Slabo 27px', serif;
    text-shadow: 0px 1px 0px <?=$text?>;
}
#container {
    position: relative;
    top: 5px;
}
#footer {
    font-size: 85%;
}
.well {
    padding-top: 5px;
    padding-bottom: 0px;
    padding-left: 10px;
    padding-right: 10px;
    border-radius: 4px;
    background-image: linear-gradient(to bottom,
        rgba(0, 0, 0, <?=1 - 0xe8/255.0?>) 0px,
        rgba(0, 0, 0, <?=1 - 0xf5/255.0?>) 100%);
}

/* Link behavior. */
a, a:link {
    color: <?=$link?> !important;
    text-decoration: none;
}
a:hover {
    color: <?=$link?> !important;
    background-color: transparent;
    text-decoration: underline;
}

/* Markdown text. */
.markdown-content p, .markdown-content li, .markdown-content blockquote,
.markdown-content code, .markdown-content pre {
    /*color: <?=$text?>;*/
    background-color: transparent;
    border-radius: 0.25rem;
}
.markdown-content pre {
    font-size: 10pt;
    line-height: 14pt;
}
.markdown-content code {
    background-color: rgba(0, 0, 0, <?=1 - 0xf8/255.0?>);
}

.markdown-content abbr {
    text-decoration: underline dotted <?=$text?>;
}

.markdown-content a abbr {
    text-decoration: underline dotted <?=$link?>;
}

button.btn-primary, button.btn-primary:hover, button.btn-primary:focus {
    background-image: linear-gradient(to bottom, <?=$link?> 0px, <?=$head?> 100%);
    border-color: <?=$head?>;
    color: <?=$bg?>;
    background-color: <?=$head?>;
    box-shadow: none;
}
button.btn-primary:hover {
    background-image: linear-gradient(to bottom, <?=$head?> 0px, <?=$link?> 100%);
}
