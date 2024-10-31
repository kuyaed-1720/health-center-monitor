window.addEventListener("DOMContentLoaded", function () {
    // 	const ROOT_DIR = "http://localhost/health-monitor/public/";
    // 	let currentUrl = window.location.href;
    // 	let url = currentUrl.replace(new RegExp(`\\b${ROOT_DIR}\\b`, 'g'), '');

    let passwordEye = document.getElementById("password-eye");
    passwordEye.addEventListener("click", function () {
        let passwordInput = document.getElementById("password");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            passwordEye.className = "bi bi-eye-fill";
        } else {
            passwordInput.type = "password";
            passwordEye.className = "bi bi-eye-slash-fill";
        }
    });

    let confirmPasswordEye = document.getElementById("confirm-password-eye");
    if (confirmPasswordEye) {
        confirmPasswordEye.addEventListener("click", function () {
            let confirmPasswordInput =
                document.getElementById("confirm_password");
            if (confirmPasswordInput.type === "password") {
                confirmPasswordInput.type = "text";
                confirmPasswordEye.className = "bi bi-eye-fill";
            } else {
                confirmPasswordInput.type = "password";
                confirmPasswordEye.className = "bi bi-eye-slash-fill";
            }
        });
    }
});

function links() {
    let links = document.getElementsByClassName("nav-link");
    let sidebar = document.getElementsByClassName("sidebar")[0];

    for (let i = 0; i < links.length; i++) {
        links[i].addEventListener("click", function () {
            for (let j = 0; j < links.length; j++) {
                if (links[j].classList.contains("bg-success")) {
                    links[j].classList.remove("bg-success");
                    links[j].classList.remove("text-light");
                }
            }
            links[i].classList.add("bg-success");
            links[i].classList.add("text-light");
        });
    }
}
