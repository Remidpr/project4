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

