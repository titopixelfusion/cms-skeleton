#!/bin/bash

PROVISIONING_PATH=`dirname $0`

# The paths that are set here must match the ones expected on the virtual host
API_PATH=$PROVISIONING_PATH/../api
APP_PATH=$PROVISIONING_PATH/../webapp

echo
echo '############### PROVISIONING VM ###############'
echo
echo 'Cloning repos...'
echo

git clone -b develop git@bitbucket.org:PixelFusion/tourismnz-api.git $API_PATH
git clone -b develop git@bitbucket.org:PixelFusion/tourismnz-webapp.git $APP_PATH

pushd $PROVISIONING_PATH

echo
echo 'Go grab a coffee, this may take a while'
echo

vagrant up

if [ "$?" -ne "0" ] ; then
  echo
  echo '########### PROVISIONING FAILED! ###########'
  echo '                Awe shitz! 💩               '
  echo '############################################'
  echo
  exit 1
else
  popd
  echo '################### DONE ###################'
  echo '    Provisioning success. Major key! 🔑     '
  echo '############################################'
  echo
  sleep 2
  open http://tourismnz.dev
fi
