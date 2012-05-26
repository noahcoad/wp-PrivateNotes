#!/bin/bash

./pack.sh
cp private-notes.php wp-plugin-directory/trunk/
cp style.css wp-plugin-directory/trunk/
pushd wp-plugin-directory/
svn add trunk/*
svn ci -m "$1"
popd