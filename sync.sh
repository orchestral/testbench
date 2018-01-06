#!/bin/bash

BRANCH='3.5'
echo ">>>> Checkout branch $BRANCH"
git checkout $BRANCH
git submodule init
git submodule foreach git checkout $BRANCH
git submodule foreach git pull
