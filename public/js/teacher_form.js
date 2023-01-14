/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************************!*\
  !*** ./resources/js/teacher_form.js ***!
  \**************************************/
teacherFormApp = function teacherFormApp() {
  return {
    teacherForm: {},
    confirm: function confirm() {
      document.getElementById('teacher-form').action = "/teacher-form/preview";
      document.getElementById('teacher-form').submit();
    },
    store: function store() {
      document.getElementById('teacher-form').action = "/teacher-form";
      document.getElementById('teacher-form').submit();
    }
  };
};
/******/ })()
;