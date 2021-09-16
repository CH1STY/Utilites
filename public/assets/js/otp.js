function submitForm(event) {
    event.preventDefault();
}

function emailChanged() {
    emailText = document.getElementById("emailHelp");
    emailText.style.color = "#868e96";
    emailText.innerHTML = "We'll never share your email with anyone else.";
    let msgDiv = document.getElementById("msgDiv");
    msgDiv.innerHTML = "";
}

function getCode() {
    inputEmail = document.getElementById("email");
    let msgDiv = document.getElementById("msgDiv");
    msgDiv.innerHTML = "";

    if (inputEmail.value === "") {
        emailText = document.getElementById("emailHelp");
        emailText.style.color = "red";
        emailText.innerHTML = "Email is Required!";
        return false;
    } else {
        let dynamicButtons = document.getElementById("buttonDiv");
        let prevHTML = dynamicButtons.innerHTML;
        dynamicButtons.innerHTML = spinner();
        let csrf = document.getElementById("csrf").value;

        SendOTP(inputEmail.value, csrf).then((res) => {
            if (res === "Wait") {
                dynamicButtons.innerHTML = prevHTML;
                msgDiv.innerHTML = ` <h4 class="text-center text-warning">Please wait 1 min Before Another Request</h4>`;
                return false;
            } else if (res === "Found") {
                inputEmail.disabled = true;
                msgDiv.innerHTML = ` <h4 class="text-center text-success">OTP SENT</h4>`;

                dynamicBox = document.getElementById("dynamicPart");

                dynamicBox.innerHTML = ` 
                <div class="mb-3">
                    <label class="form-label">Enter OTP</label>
                    <input type="text" id="otp" name="otp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                `;

                dynamicButtons.innerHTML = ` 
                    <button onclick="submitOTP()" id="btnSubmitOTP" class="btn btn-primary">Submit</button>
                    <button onclick="resendOTP()" id="btnResendOTP" class="btn btn-dark">Resend</button>
                `;
            } else if (res === "NotFound") {
                dynamicButtons.innerHTML = prevHTML;
                msgDiv.innerHTML = ` <h4 class="text-center text-danger">User Not Found Try Again</h4>`;
            }
        });
    }
}

function submitOTP() {
    let inputEmail = document.getElementById("email").value;
    let inputOtp = document.getElementById("otp").value;
    let csrf = document.getElementById("csrf").value;
    let msgDiv = document.getElementById("msgDiv");

    VerifyOTP(inputEmail, inputOtp, csrf).then((res) => {
        console.log(res);
        if (res === "Success") {
            window.location.replace("/dashboard/");
        } else if (res === "fatalError") {
            msgDiv.innerHTML = ` <h4 class="text-center text-danger">INVALID OTP / OTP NOT FOUND</h4>`;
        }
        else if(res==="expired")
        {
            msgDiv.innerHTML = ` <h4 class="text-center text-warning">OTP Expired Please Resend</h4>`;
        }
    });
}

function resendOTP() {
    getCode();
}

async function VerifyOTP(userEmail, userOTP, userToken) {
    let data = {
        email: userEmail,
        otp: userOTP,
        _token: userToken,
    };
    // console.log(data);

    url = "/login/verifyOTP";
    const response = await fetch(url, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": data._token,
        },
        body: JSON.stringify(data), // body data type must match "Content-Type" header
    });
    return response.json(); // parses JSON response into native JavaScript objects
}

async function SendOTP(userEmail, userToken) {
    let data = {
        email: userEmail,
        _token: userToken,
    };
    // console.log(data);

    url = "/login/otp";
    const response = await fetch(url, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": data._token,
        },
        body: JSON.stringify(data), // body data type must match "Content-Type" header
    });
    return response.json(); // parses JSON response into native JavaScript objects
}

function spinner() {
    return `   
    <div class="spinner-border text-danger" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
  `;
}
