// @ts-nocheck
try {
  window.Popper = require("popper.js").default;
  window.$ = window.jQuery = require("jquery");
  require("bootstrap");
} catch (e) { }
require("admin-lte");
require('swiper')