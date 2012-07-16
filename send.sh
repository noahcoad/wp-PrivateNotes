#!/bin/bash

./pack.sh
cp private-notes\* wp-plugin-directory/trunk/
pushd wp-plugin-directory/
svn add trunk/*
svn ci -m "$1"
popd