#!/bin/bash

BRANCH=$1
echo ">>>> Checkout branch $BRANCH"
git checkout $BRANCH
git submodule init
git submodule foreach git checkout $BRANCH
git submodule update --remote
