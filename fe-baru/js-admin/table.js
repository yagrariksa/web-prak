const btnedit = document.querySelectorAll('.btn-edit');
const btndelete = document.querySelectorAll('.btn-delete');
const formedit = document.querySelector('form#form-edit');
const formdelete = document.querySelector('form#form-delete');

btnedit.forEach(btn => {
    btn.addEventListener('click', () => {
        var data = btn.parentElement.parentElement.querySelector('.content-single-table');

        document.querySelector('input#id').value = data.dataset.id
        document.querySelector('input#name').value = data.textContent

        formedit.classList.remove('hide');
    });
});

formedit.querySelector('button').addEventListener('click', (e) => {
    e.preventDefault()
    var inputvalue = document.querySelector('input#name').value;
    if ( inputvalue != "") {
        formedit.submit();
    }
});

btndelete.forEach(btn => {
    btn.addEventListener('click',()=>{
        formdelete.setAttribute('action',btn.dataset.url);
        formdelete.submit();
    })
});
