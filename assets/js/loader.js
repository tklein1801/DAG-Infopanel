class Loader {
  constructor() {}

  init() {
    document.querySelector(
      "body .content-wrapper"
    ).innerHTML += `<div class="loader"><div id="container"><div id="spinner" class="spinner-border" role="status" style="width: 3rem; height: 3rem; color: #df691a;"></div><h1 class="title text-center">Infotool</h1></div></div>`;

    window.addEventListener("load", function () {
      const loader = document.querySelector(".loader");
      loader.className += " hidden";
    });
  }
}
