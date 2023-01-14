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

        //update post
        update(){
            axios.put(`/api/posts/${this.post.id}` , this.post)
            .then(response => {
                this.allPosts();
                this.post.title = '';
                this.post.author = '';
                this.post.description = ''; 
                this.showModal = false; 
                this.doEdit = false;
            })
            .catch(error => {
                this.errorMessage.title = error.response.data.errors.title;
                this.errorMessage.author = error.response.data.errors.author;
            })
        },
    }
};