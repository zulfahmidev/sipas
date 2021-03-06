let app = new Vue({
    el: '#app',
    data: {
        content: '',
        html: '',
        mode: 0,
        editor,
        kop: 0,
    },
    methods: {
        async cetak() {
            if (this.mode == 1) this.view();
            this.html = document.querySelector('#surat').innerHTML;
            await console.log(this.html);
            document.querySelector('#form').submit();
        },
        select(s) {
            return document.querySelector(s);
        },
        switchKop() {
            this.kop = (this.kop == 0) ? 1 : 0;
        },
        importHTML() {
            let fileUpload = document.querySelector('#file_upload');
            fileUpload.click();
            fileUpload.onchange = (e) => {
                let file = fileUpload.files[0];
                console.log(file);
                
                if (file) {

                    if (file.type == 'text/html') {
                        let reader = new FileReader();
                        
                        reader.onload = function() {
                            document.querySelector('#edit').innerHTML = this.result;
                        }
                        reader.readAsText(file);
                    }
                }
            }
        },
        edit() {
            document.querySelector('#view').classList.remove('fr-view');
            this.editor = new FroalaEditor('#edit');
            this.mode = 1;
        },
        view() {
            document.querySelector('#view').classList.add('fr-view');
            this.editor.destroy();
            this.mode = 0;
        }
    },
    created() {
    },
    mounted() {
        
    }
})