teacherFormApp = () => {
	return {
        teacherForm: {},

        confirm() {
            document.getElementById('teacher-form').action = "/teacher-form/preview"
            document.getElementById('teacher-form').submit();
        },

        store() {
            document.getElementById('teacher-form').action = "/teacher-form"
            document.getElementById('teacher-form').submit();
        },
    }
};