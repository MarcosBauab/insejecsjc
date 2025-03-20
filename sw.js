const pages = [
    "./",
    "./index.php",
    "./style.css",
    "./js/app.js",
    "./home.php",
    "./img/banner-min.png"
]
self.addEventListener("install", e => {
    e.waitUntil(
        caches.open("static").then(cache =>{
            return cache.addAll(pages)
        })
    )
})

self.addEventListener("fetch", e => {
    e.respondWith(
        caches.match(e.request).then(res => {
            return res || fetch(e.request)
        })
    )
})