ver = `date +%Y%m%d`

all:
	rm -rf release
	mkdir release
	awk '{ system("cd release && git clone https://"$$2"/"$$1".git && cd "$$1" && git checkout "$$3" && git submodule init && git submodule update && rm -r .* && cd ../..") }' < externals
	sed -i -r -e "s/'version'\s*=>\s*'(.*)'/'version' => '\1$(ver)'/" release/SemanticBundle/SemanticBundle.php
	mkdir release/SemanticBundle/data-values
	mv release/Interfaces release/SemanticBundle/data-values/interfaces
	mv release/DataValues release/SemanticBundle/data-values/data-values
	mv release/Common release/SemanticBundle/data-values/common
	mv release/Validators release/SemanticBundle/data-values/validators
	mv release/Time release/SemanticBundle/data-values/time
	mv release/Geo release/SemanticBundle/data-values/geo
	mkdir release/SemanticBundle/param-processor
	mv release/ParamProcessor release/SemanticBundle/param-processor/param-processor
	tar -C release -c ./ | gzip >SemanticBundle-${ver}.tgz
	7z a SemanticBundle-${ver}.7z release
	(cd release; zip -r ../SemanticBundle-${ver}.zip .)
	rm -rf release
dev:
	rm -rf dev 
	mkdir dev
	awk '{ system("cd dev && git clone https://"$$2"/"$$1".git && cd "$$1" && git submodule init && git submodule update && rm -r .* && cd ../..") }' < externals
	sed -i -r -e "s/'version'\s*=>\s*'(.*)'/'version' => '\1$(ver)-dev'/" dev/SemanticBundle/SemanticBundle.php
	mkdir release/SemanticBundle/data-values
	mv release/Interfaces release/SemanticBundle/data-values/interfaces
	mv release/DataValues release/SemanticBundle/data-values/data-values
	mv release/Common release/SemanticBundle/data-values/common
	mv release/Validators release/SemanticBundle/data-values/validators
	mv release/Time release/SemanticBundle/data-values/time
	mv release/Geo release/SemanticBundle/data-values/geo
	mkdir release/SemanticBundle/param-processor
	mv release/ParamProcessor release/SemanticBundle/param-processor/param-processor
	tar -C dev -c ./ | gzip >SemanticBundle-dev-$(ver).tgz
	7z a SemanticBundle-dev-${ver}.7z dev
	(cd dev; zip -r ../SemanticBundle-dev-$(ver).zip .)
	rm -rf dev
clean:
	rm -rf release dev SemanticBundle-*.tgz SemanticBundle-dev-*.tgz SemanticBundle-*.zip SemanticBundle-dev-*.zip SemanticBundle-*.7z SemanticBundle-dev-*.7z
