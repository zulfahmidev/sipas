let app = new Vue({
    el: '#app',
    data: {
        content: '',
        html: '',
        editor,
    },
    methods: {
        async cetak() {
            this.html = document.querySelector('#surat').innerHTML + this.editor.getData();
            await console.log(this.html)
            document.querySelector('#surat').classList.remove('create');
            document.querySelector('#form').submit();
            document.querySelector('#surat').classList.add('create');
        },
        select(s) {
            return document.querySelector(s);
        },
    },
    created() {
    },
    mounted() {
        DecoupledEditor
        .create( this.select( '#editor' ), {
            ckfinder: {
                uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',
            },
            toolbar: [ 'heading', '|', 'fontfamily','fontsize','fontcolor','fontbackgroundcolor','|','bold','italic','underline','strikethrough','|','alignment','|','numberedlist','bulletedlist','|','outdent','indent','|','link','blockquote','ckfinder','inserttable','mediaembed','|','undo','redo']
        } )
        .then( editor => {
            const toolbarContainer = this.select( '#toolbar-container' );
            toolbarContainer.appendChild( editor.ui.view.toolbar.element );

            this.editor = editor;
        } )
        .catch( error => {
            console.error( error );
        } );
    }
})