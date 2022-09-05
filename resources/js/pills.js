import jQuery from "jquery";
window.$ = jQuery;

const toVertical = function () {
    document.getElementById("v-pills-tab").hidden = true;
    document.getElementById("h-pills-tab").hidden = false;
    document.getElementById("pills-div").classList.remove("d-flex");
};
const toHorizontal = function () {
    document.getElementById("h-pills-tab").hidden = true;
    document.getElementById("v-pills-tab").hidden = false;
    document.getElementById("pills-div").classList.add("d-flex");
};

const resize = function () {
    if (document.body.clientWidth < 959) {
        toVertical();
    } else {
        toHorizontal();
    }
};

resize();

const tabPanes = document.getElementsByClassName("tab-pane");
Array.from(tabPanes).forEach((element) => {
    element.hidden = false;
});

jQuery(document).ready(function ($) {
    $(window).resize(function () {
        resize();
    });
});
