try {
    window.Popper = require("popper.js").default;
    window.$ = window.jQuery = require("jquery");
    require("bootstrap");
} catch (e) {}
require("icheck-bootstrap");
require("admin-lte");
// require("bs-custom-file-input");
