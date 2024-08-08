[1, 2, 3].forEach(element => {
    if (document.querySelector('#table' + element) != null) {
        var table = new simpleDatatables.DataTable(document.querySelector('#table' + element), {
            responsive: true,
            lengthMenu: [25, 50, 75, 100],
            perPageSelect: [25, 50, 75, 100],
        });
    }
});

