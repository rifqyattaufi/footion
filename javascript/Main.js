const SubmitButton = document.getElementById('submit');
/*
    ----------------------------fungsi pengecekenan---------------------------
*/

//mengecek ada isinya apa tidak
const isRequired = value => value === '' ? false : true;
//mengecek panjang karakter
const isBetween = (length, min, max) => length < min || length > max ? false : true;
//mengecek email valid atau tidak
const isEmailValid = (email) => {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
};
//mengecek password valid atau tidak
const isPasswordSecure = (password) => {
    const re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})");
    return re.test(password);
};


/*
    ----------------------------fungsi pengecekenan email---------------------------
*/
const validateEmail = (email) => {
    if (!isRequired(email)) {
        alert('Email cannot be blank.');
        return false;
    } else if (!isEmailValid(email)) {
        alert('Email is not valid.');
        return false;
    }
    return true;
};

/*
    ----------------------------fungsi pengecekenan password---------------------------
*/
const validatePassword = (password) => {
    if (!isRequired(password)) {
        alert('Password cannot be blank.');
        return false;
    } else if (!isBetween(password.length, 8, 100)) {
        alert('Password must be between 8 and 100 characters.');
        return false;
    } else if (!isPasswordSecure(password)) {
        alert('Password must contain at least one uppercase, lowercase and number.');
        return false;
    }
    return true;
};


/*
    ----------------------------Proses Validating Halaman Login Form---------------------------
*/
const loginForm = document.getElementById('login');

if (loginForm != null) {
    SubmitButton.onclick = (e) => { 
        if (validateEmail(loginForm.email.value) && validatePassword(loginForm.password.value)) {
            console.log(loginForm.email.value);
            console.log(loginForm.password.value);
            console.log('Login successful!');
            alert('Login Berhasil');
            console.log(loginForm);
            loginForm.submit();
        }
    };
}

/*
    ----------------------------Proses Validating Halaman Register Form---------------------------
*/
// const registerForm = document.getElementById('login');

// if (loginForm != null) {
//     SubmitButton.onclick = (e) => { 
//         if (!isRequired(registerForm.name.value)) {
//             alert("Name Is Required");
//         }
//         }
//         if (validateEmail(loginForm.email.value) && validatePassword(loginForm.password.value)) {
//             console.log(loginForm.email.value);
//             console.log(loginForm.password.value);
//             console.log('Login successful!');
//             alert('Login Berhasil');
//             console.log(loginForm);
//             // registerForm.submit();
//         }
//     };
// }

/*
    ----------------------------Proses Validating Halaman Donation Form---------------------------
*/

/*
    ----------------------------Proses Validating Halaman Driver Form---------------------------
*/

/*
    ----------------------------Proses Validating Halaman Order Form---------------------------
*/
const orderForm = document.getElementById('order');

if (orderForm != null) {
    SubmitButton.onclick = (e) => {
        e.preventDefault();
        if (!isRequired(orderForm.resto.value)) {
            alert("Resto Is Required");
        } else {
            console.log(orderForm.resto.value);
        }
        console.log(orderForm.pesanan.value);
        console.log(orderForm.jumlah.value);
        console.log(orderForm.total.value);
        console.log(orderForm.bayar.value);
        console.log(orderForm.alamat.value);
        alert('order berhasil')
    };
}