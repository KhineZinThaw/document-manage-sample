/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************************!*\
  !*** ./resources/js/student_form.js ***!
  \**************************************/
studentFormApp = function studentFormApp() {
  return {
    studentForm: {},
    confirm: function confirm() {
      document.getElementById('student-form').action = "/student-form/preview";
      document.getElementById('student-form').submit();
    },
    store: function store() {
      document.getElementById('student-form').action = "/student-form";
      document.getElementById('student-form').submit();
    }
  };
};
/******/ })()
;