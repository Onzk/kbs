// var snow = new Quill('#snow', {
//     theme: 'snow'
// });
// var bubble = new Quill('#bubble', {
//     theme: 'bubble'
// });



function load() {
    return new Quill("#full", {
        bounds: "#full-container .editor",
        modules: {
            toolbar: [
                [{
                    font: []
                }, {
                    size: []
                }],
                ["bold", "italic", "underline", "strike"],
                [{
                        color: []
                    },
                    {
                        background: []
                    }
                ],
                [{
                        script: "super"
                    },
                    {
                        script: "sub"
                    }
                ],
                [{
                        list: "ordered"
                    },
                    {
                        list: "bullet"
                    },
                    {
                        indent: "-1"
                    },
                    {
                        indent: "+1"
                    }
                ],
                ["direction", {
                    align: []
                }],
                ["link"],
                ["clean"]
            ]
        },
        theme: "snow"
    })
}
let editor = load();

document.addEventListener('livewire:init', () => {
    Livewire.on('quillReload', (event) => {
        var qlEditor =  document.querySelectorAll('.ql-editor > p')[0]
        var content = event[0]?.contents ?? "";
        var nHtml = (new DOMParser().parseFromString(content, 'text/html'));
        qlEditor.innerHTML = nHtml.body.innerHTML
    });
});
