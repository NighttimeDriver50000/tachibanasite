#!/bin/sh
find . ! -path './.git/*' -type f -print -exec sed -i 's|^\(.\s*File:\s*\).*$|\1'{}'|' {} \;