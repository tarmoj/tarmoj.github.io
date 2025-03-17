#!/bin/bash
mkdocs build
scp -r  -P 38307 site/* v2404@uuu.ee:/home/v2404/public_html/tarmojohannes/
