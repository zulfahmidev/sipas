let app = new Vue({
    el: '#app',
    data: {
        content: '',
        html: '',
        mode: 0,
        editor,
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
        importHTML() {
            let fileUpload = document.querySelector('#file_upload');
            fileUpload.click();
            fileUpload.onchange = (e) => {
                let file = fileUpload.files[0];
                
                if (file) {
                    let reader = new FileReader();
                    let vue = this;
                    
                    reader.onload = function() {
                        mammoth.convertToHtml({arrayBuffer: this.result})
                        .then(function(docx) {
                            document.querySelector('#edit').innerHTML = docx.value;
                            // fs.writeFile(destinationPath, docx.toBuffer(), callback);
                        });
                    }
                    reader.readAsArrayBuffer(file);
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