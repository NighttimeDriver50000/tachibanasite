/*
    File:   modules/highlight.js.exec/hljs-exec.js
    Author: Chris McKinney
    Edited: Jul 14 2017
    Editor: Chris McKinney

    Description:

    Starts highlighting on load.

    Edit History:

    0.8.10  - Created. Moved content from utils.js.

    1.7.14  - Added proper support for the "text" class.

    License:

    Copyright 2016 Chris McKinney

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

window.loadActions.push(function() {
    hljs.initHighlighting();
    $(".text").addClass("hljs");
})
