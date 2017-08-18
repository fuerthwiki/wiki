#! /bin/bash

# Small bash script to build and upload a Semantic Bundle release.
# By Jeroen De Dauw

# Parameters:
# $1: user
# $2: Google Code password
# $3: What to release; all, stable or dev; defaults to all
# $4: release number; defaults to yyyymmdd
# Example: bash releasesb.sh jeroendedauw@gmail.com urawesomepassword stable

if [ "$1" == "" ] || [ "$2" == "" ]; then
    echo "Missing required parameter; aborting."
    exit
fi

# make sure we got the latest version of SB
svn up

what="$3"

if [ "$what" == "" ]; then
    what="all"
fi

version="$4"

if [ "$version" == "" ]; then
    version=`date +%Y%m%d`
fi

if [ "$what" == "all" ] || [ "$what" == "dev" ]; then
    make dev

    googlecode_upload.py -s "Semantic Bundle DEV build r$version (tgz file)" -p semantic-mediawiki-bundle -l "Type-Source,OpSys-All" SemanticBundle-dev-$version.tgz -u $1 -w $2
    googlecode_upload.py -s "Semantic Bundle DEV build r$version (zip file)" -p semantic-mediawiki-bundle -l "Type-Source,OpSys-All" SemanticBundle-dev-$version.zip -u $1 -w $2
    googlecode_upload.py -s "Semantic Bundle DEV build r$version (7z file)" -p semantic-mediawiki-bundle -l "Type-Source,OpSys-All" SemanticBundle-dev-$version.7z -u $1 -w $2
fi

if [ "$what" == "all" ] || [ "$what" == "stable" ]; then
    make all

    googlecode_upload.py -s "Semantic Bundle r$version (tgz file)" -p semantic-mediawiki-bundle -l "Type-Source,OpSys-All" SemanticBundle-$version.tgz -u $1 -w $2
    googlecode_upload.py -s "Semantic Bundle r$version (zip file)" -p semantic-mediawiki-bundle -l "Featured,Type-Source,OpSys-All" SemanticBundle-$version.zip -u $1 -w $2
    googlecode_upload.py -s "Semantic Bundle r$version (7z file)" -p semantic-mediawiki-bundle -l "Featured,Type-Source,OpSys-All" SemanticBundle-$version.7z -u $1 -w $2
fi
