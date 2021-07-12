const saveBtn = document.getElementById('saveBtn');
const addAttemptBtn = document.querySelector('.js-btn-add-attempt');
const addReferenceBtn = document.querySelector('.js-btn-add-reference');
const cancelAttemptBtn = document.querySelector('.js-btn-cancel-attempt');
const cancelReferenceBtn = document.querySelector('.js-btn-cancel-reference');


function createInput(nameAttr) {
    const input = document.createElement('input');
    input.setAttribute('type','text');
    input.setAttribute('name',nameAttr);
    input.classList.add('form__input');
    return input;
}
function addInput(btn,nameAttr) {
    const inputWrapper = btn.parentNode.previousElementSibling;
    const input = createInput(nameAttr);

    if(inputWrapper.lastElementChild.value !== '') {
        inputWrapper.appendChild(input);
        input.focus();
    }
}
function cancel(btn) {
    const inputWrapper = btn.parentNode.previousElementSibling;
    if(inputWrapper.lastElementChild.value === '' && inputWrapper.childElementCount > 1) {
        inputWrapper.lastElementChild.remove();
        btn.previousElementSibling.disabled = false;
    }
}

addAttemptBtn.addEventListener('click', function() {
    addInput(this, 'memo[attempt][]');
});

cancelAttemptBtn.addEventListener('click', function() {
    cancel(this);
});

addReferenceBtn.addEventListener('click', function() {
    addInput(this,'memo[reference][]');
});

cancelReferenceBtn.addEventListener('click', function() {
    cancel(this);
});

saveBtn.addEventListener('click', function() {
    document.memoForm.submit();
});