document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, {accordion:true,
      onCloseStart: () =>{
        const $temp = document.querySelector('.select');
        if ($temp != null ){
          $temp.classList.remove('select');
        }       
      }});  
});

document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.dropdown-trigger');
  var instances = M.Dropdown.init(elems, {hover:true});
});
