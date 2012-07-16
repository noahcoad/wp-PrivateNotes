#!/bin/bash

pushd private-notes
7z a -tzip ..\private-notes.zip private-notes.php style.css
popd
