const genderDiv = document.querySelector('#gender-toggle');

const type = document.querySelector('#type');
type.addEventListener('change', () => {

    if (type.value === "average") {
        genderDiv.classList.remove('d-block');
        genderDiv.classList.add('d-none');
    } else {
        genderDiv.classList.add('d-block');
        genderDiv.classList.remove('d-none');
    }

})


function switchSelect() {
    if (type.value === "average") {
        genderDiv.classList.remove('d-block');
        genderDiv.classList.add('d-none');
    } else {
        genderDiv.classList.add('d-block');
        genderDiv.classList.remove('d-none');
    }
}
