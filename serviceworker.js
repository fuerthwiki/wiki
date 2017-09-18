var version = 'v201709182039::';

self.addEventListener("install", function(event) {
	console.log('WORKER: install event in progress.');

	event.waitUntil(
		caches.open(version + 'fuerthwiki').then(function(cache) {
			return cache.addAll([
				'/wiki/index.php/Hauptseite?mobileaction=toggle_view_mobile'
			]);
		}).then(function() {
			console.log('WORKER: install completed');
		})
	);
});

self.addEventListener("activate", function(event) {
	console.log('WORKER: activate event in progress.');

	event.waitUntil(
		caches.keys().then(function (keys) {
			return Promise.all(
				keys.filter(function (key) {
					return !key.startsWith(version);
				})
				.map(function (key) {
					return caches.delete(key);
				})
			);
		})
		.then(function() {
			console.log('WORKER: activate completed.');
		})
	);
});


self.addEventListener('fetch', function(event) {
	//console.log('WORKER: fetch: ', event.request.url);

  event.respondWith(
    fetch(event.request).catch(function() {
      return caches.match(event.request);
    })
  );
});
