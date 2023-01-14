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
    },
    //update post
    update: function update() {
      var _this = this;
      axios.put("/api/posts/".concat(this.post.id), this.post).then(function (response) {
        _this.allPosts();
        _this.post.title = '';
        _this.post.author = '';
        _this.post.description = '';
        _this.showModal = false;
        _this.doEdit = false;
      })["catch"](function (error) {
        _this.errorMessage.title = error.response.data.errors.title;
        _this.errorMessage.author = error.response.data.errors.author;
      });
    }
  };
};
/******/ })()
;