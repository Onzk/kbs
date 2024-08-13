// var snow = new Quill('#snow', {
//     theme: 'snow'
// });
// var bubble = new Quill('#bubble', {
//     theme: 'bubble'
// });



function load(id) {
    return new Quill("#full" + id, {
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
let editor0 = load('0');
let editor1 = load('1');

document.addEventListener('livewire:init', () => {
    Livewire.on('multiQuillReload', (event) => {
        var qlEditors =  document.querySelectorAll('.ql-editor > p')

        var content = event[0]?.contents0 ?? "";
        var nHtml = (new DOMParser().parseFromString(content, 'text/html'));
        qlEditors[0].innerHTML = nHtml.body.innerHTML
        content = event[0]?.contents1 ?? "";
        nHtml = (new DOMParser().parseFromString(content, 'text/html'));
        qlEditors[1].innerHTML = nHtml.body.innerHTML
    });
});
