tinymce.init({
    selector: '#mytextarea'
});

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.fixed-action-btn');
    var instances = M.FloatingActionButton.init(elems, options);
});

var instance = M.FloatingActionButton.getInstance(elems);