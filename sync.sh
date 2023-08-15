#!/bin/bash

BRANCH='8.x'

echo ">>>> Checkout branch $BRANCH"
git checkout $BRANCH
git submodule init
git submodule foreach git reset --hard HEAD
git submodule foreach git checkout $BRANCH
git submodule foreach git pull

cp -rf core/testbench.yaml ./
cp -rf core/workbench ./
