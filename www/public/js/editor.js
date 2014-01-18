var editor;
KindEditor.ready(function(K) {
    editor = K.create('#Post_content', {
        themeType: "simple",
        filePostName: 'upload',
        uploadJson: IMAGE_UPLOAD_URL,
        items : [
            'forecolor', 'hilitecolor', 'bold', 'underline', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
            'insertunorderedlist', '|', 'image', 'link', 'code'
        ],
        cssData: 'body { font-size: 14px; }'
    });
});