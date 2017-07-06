#!/bin/bash

git submodule init
git submodule foreach git checkout 3.5
git submodule update --remote
