#!/usr/bin/env python2
'''
    File:   ./modules/autots/__main__.py
    Author: Chris McKinney
    Edited: Dec 09 2017
    Editor: Chris McKinney

    Description:

    Bootstraps autots.

    Edit History:

    1.9.0   - Created module.

    License:

    Copyright 2017 Chris McKinney

    Licensed under the Apache License, Version 2.0 (the "License"); you may not
    use this file except in compliance with the License.  You may obtain a copy
    of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.
'''

try:
    # Works if imported as a module
    from . import main
except ValueError:
    # Add the tachibanasite modules directory to the python path
    from os.path import dirname, realpath
    import sys
    sys.path.append(dirname(dirname(realpath(__file__))))
    # Import using the package name
    from autots import main

if __name__ == '__main__':
    # Execute main
    raise SystemExit(main())