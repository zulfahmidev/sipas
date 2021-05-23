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