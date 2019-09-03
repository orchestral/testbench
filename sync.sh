#!/bin/bash

<<<<<<< HEAD
BRANCH='master'
=======
BRANCH='4.x'
>>>>>>> 4.x
echo ">>>> Checkout branch $BRANCH"
git checkout $BRANCH
git submodule init
git submodule foreach git reset --hard HEAD
git submodule foreach git checkout $BRANCH
git submodule foreach git pull
