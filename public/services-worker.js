self.addEventListener("install", (event) => {
    event.waitUntil(
      caches
        .open("ttt")
        .then((cache) =>
          cache.addAll([
            "/images/about_US.git",
            "/images/about-icon-01.png",
            "/images/slider-icon.gif",
            "/images/right-image.gif",
            "/images/left-image.gif",
            "/images/service-icon-01.png",
            "/images/service-icon-02.png",
            "/images/service-icon-03.png",
            "/images/logo.png",
            "/images/logo2.png",
            "/images/mypic.png",
            "/images/left-image.png",
            "/images/contact.gif",
            "/images/google.svg",
            "/images/facebook.svg",
            "/images/banner-bg2.svg",
            "/images/banner-bg.svg",
            "/js/bootstrap.js",
            "/js/bootstrap.min.js",
            "/js/compressor.js",
            "/js/cv.js",
            "/js/img_to_pdf.js",
            "/js/imgfix.js",
            "/js/jquery-2.1.0.min.js",
            "/js/jquery.counterup.min.js",
            "/js/js.js",
            "/js/owl-carousel.js",
            "/js/pdf_to_img.js",
            "/js/popper.js",
            "/js/scrollreveal.min.js",
            "/js/waypoints.min.js",
            
          ]),
        ),
    );
  });
  self.addEventListener('activate', event => {
    event.waitUntil(
      caches.keys().then(cacheNames => {
        return Promise.all(
          cacheNames.map(cacheName => {
            if (cacheName !== 'ttt') {
              console.log('Deleting old cache:', cacheName);
              return caches.delete(cacheName);
            }
          })
        );
      })
    );
  });
  
  self.addEventListener("fetch", (event) => {
    event.respondWith(
      caches.match(event.request).then((response) => {
        // caches.match() always resolves
        // but in case of success response will have value
        if (response !== undefined) {
          return response;
        } else {
          return fetch(event.request)
            .then((response) => {
              // response may be used only once
              // we need to save clone to put one copy in cache
              // and serve second one
              let responseClone = response.clone();
  
              caches.open("ttt").then((cache) => {
                cache.put(event.request, responseClone);
              });
              return response;
            })
            .catch(() => caches.match("/gallery/myLittleVader.jpg"));
        }
      }),
    );
  });
  