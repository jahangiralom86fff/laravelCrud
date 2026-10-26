//regi number alert//
document.querySelectorAll('.form-regi').forEach(function(input) {

    input.addEventListener('input', function () {

        if (/[a-zA-Z]/.test(this.value)) {
            alert('Only numbers are allowed!');
        }
        this.value = this.value.replace(/[^0-9]/g, '');
    });

});

//roll number //
document .querySelectorAll('.form-roll') .forEach (function(input){
    input .addEventListener('input', function (){
        if(/[a-zA-Z]/ .test(this.value)){
            alert('Only Number Allow Please Number type');
        }
        this .value = this .value.replace(/[^0-9]/g, '');
    });
});
//chat js//

const birthDateInput = document.getElementById('birth_date');
const ageDisplay = document.getElementById('age');

if (birthDateInput && ageDisplay) {

    birthDateInput.addEventListener('change', function () {

        if (!this.value) {
            ageDisplay.innerHTML = '';
            return;
        }

        const birthDate = new Date(this.value);
        const today = new Date();

        let years = today.getFullYear() - birthDate.getFullYear();
        let months = today.getMonth() - birthDate.getMonth();
        let days = today.getDate() - birthDate.getDate();

        if (days < 0) {
            months--;
            days += new Date(
                today.getFullYear(),
                today.getMonth(),
                0
            ).getDate();
        }

        if (months < 0) {
            years--;
            months += 12;
        }

        ageDisplay.innerHTML =
            `Age: ${years} Years ${months} Months ${days} Days`;
    });

}



