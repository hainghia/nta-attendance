try {
  window.Popper = require("@popperjs/core").default;
  window.$ = window.jQuery = require("jquery");
  require("bootstrap");
} catch (e) { }
require("parsleyjs");