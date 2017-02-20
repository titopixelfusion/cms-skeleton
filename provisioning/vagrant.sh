#!/bin/bash

PROVISIONING_PATH=`dirname $0`

# The paths that are set here must match the ones expected on the virtual host
CMS_PATH=$PROVISIONING_PATH/..

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
  open http://cms-skeleton.dev
fi
