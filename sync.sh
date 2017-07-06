#!/bin/bash

git submodule foreach git checkout 3.4
git submodule update --remote
