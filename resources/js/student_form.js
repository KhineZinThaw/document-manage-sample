studentFormApp = () => {
	return {
        studentForm: {},

        confirm() {
            document.getElementById('student-form').action = "/student-form/preview"
            document.getElementById('student-form').submit();
        },

        store() {
            document.getElementById('student-form').action = "/student-form"
            document.getElementById('student-form').submit();
        },
    }
};