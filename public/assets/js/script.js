window.onload = () => {
    //setting up an event listener on the password field of a user's registration form
    document.querySelector("#user_password_first").addEventListener("input", checkPass);
    //on met un écouteur d'events sur tous les boutons répondre
    document.querySelectorAll("[data-reply]").forEach(element => {
        element.addEventListener("click", function() {
            document.querySelector("#commentItems_parentid").value = $this.dataset.id
        });
    });
}

document.querySelectorAll(".carousel").forEach((carousel) => {
    const items = carousel.querySelectorAll(".carousel__item");
    const buttonsHtml = Array.from(items, () => {
        return `<span class="carousel__button"></span>`;
    });

    carousel.insertAdjacentHTML(
        "beforeend",
        `
		<div class="carousel__nav">
			${buttonsHtml.join("")}
		</div>
	`
    );

    const buttons = carousel.querySelectorAll(".carousel__button");

    buttons.forEach((button, i) => {
        button.addEventListener("click", () => {
            // un-select all the items
            items.forEach((item) =>
                item.classList.remove("carousel__item--selected")
            );
            buttons.forEach((button) =>
                button.classList.remove("carousel__button--selected")
            );

            items[i].classList.add("carousel__item--selected");
            button.classList.add("carousel__button--selected");
        });
    });

    // Select the first item on page load
    items[0].classList.add("carousel__item--selected");
    buttons[0].classList.add("carousel__button--selected");
});

// Function to check that the password has all the prerequisites
function checkPass() {
    let password = this.value;
    let totalValidation = 0;
    let lowercase = document.querySelector("#lowercase");
    let uppercase = document.querySelector("#uppercase");
    let number = document.querySelector("#number");
    let special = document.querySelector("#special");
    let length = document.querySelector("#length");

    // if it has a lowercase letter
    if (/[a-z]/.test(password)) {
        lowercase.classList.replace("invalid-password", "valid-password");
        totalValidation++;
    } else {
        lowercase.classList.replace("valid-password", "invalid-password");
    }

    // if it has an uppercase letter
    if (/[A-Z]/.test(password)) {
        uppercase.classList.replace("invalid-password", "valid-password");
        totalValidation++;
    } else {
        uppercase.classList.replace("valid-password", "invalid-password");
    }

    // if it has a number
    if (/[0-9]/.test(password)) {
        number.classList.replace("invalid-password", "valid-password");
        totalValidation++;
    } else {
        number.classList.replace("valid-password", "invalid-password");
    }

    // if it has a special character
    if (/[$@/\\!\[\]_%*#&]/.test(password)) {
        special.classList.replace("invalid-password", "valid-password");
        totalValidation++;
    } else {
        special.classList.replace("valid-password", "invalid-password");
    }

    // if the length is greater than or equal to 8
    if (password.length >= 8) {
        length.classList.replace("invalid-password", "valid-password");
        totalValidation++;
    } else {
        length.classList.replace("valid-password", "invalid-password");
    }

    // if the 5 steps are validated then the button is displayed, otherwise no
    if (totalValidation === 5) {
        document.querySelector("#password-validate").style.display = "initial";
    } else {
        document.querySelector("#password-validate").style.display = "none";
    }

}