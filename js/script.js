document.addEventListener("DOMContentLoaded", function () {

    AOS.init();
    new kursor({
        type: 4
    })
    // // Fakes the loading setting a timeout
    // window.onload = function () {
    //     setTimeout(function () {
    //         document.body.classList.add('loaded');
    //     }, 2500);
    // };
});