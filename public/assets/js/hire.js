var timeout = 0;
var timerStat = "run";

function getVariable() {
    var $_GET = {};
    if (document.location.toString().indexOf("?") !== -1) {
        var query = document.location
            .toString()
            // get the query string
            .replace(/^.*?\?/, "")
            // and remove any existing hash string (thanks, @vrijdenker)
            .replace(/#.*$/, "")
            .split("&");

        for (var i = 0, l = query.length; i < l; i++) {
            var aux = decodeURIComponent(query[i]).split("=");
            $_GET[aux[0]] = aux[1];
        }
    }
    //get the 'index' query parameter
    return $_GET;
}

function changeTimeout(timeout) {
    return timeout - 1;
}

function closeRequestModal() {
    timerStat = "stop";
   
}

async function cancelRequest(id) {
    url = `/work/remove/${id}`;
    const response = await fetch(url, {
        method: "GET",
    });
    return response.json(); // parses JSON response into native JavaScript objects
}

async function isRequestExist(id) {
    url = `/work/isExist/${id}`;
    const response = await fetch(url, {
        method: "GET",
    });
    return response.json(); // parses JSON response into native JavaScript objects
}

function countDownControll(id) {
    var requestModal = new bootstrap.Modal(
        document.getElementById("requestWaitingModal"),
        {
            keyboard: false,
        }
    );

    var timer = setInterval(function () {
        let myClock = document.getElementById("clock");
        myClock.innerHTML = " ";
        isRequestExist(id).then((res) => {
            if(res==="accepted")
            {
               
                clearInterval(timer);
                window.location.replace(`work/ongoing/${id}`);
            }
            else if (!res) {
                myClock.innerHTML = `<span class="h2 fw-bold text-warning"> Request Declined by Volunteer </span>`;
                clearInterval(timer);
            }
        });

        myClock.innerHTML = `<span class="h2 fw-bold text-warning"> ${timeout} </span>`;

        timeout = changeTimeout(timeout);

        if (timerStat === "stop") {
            clearInterval(timer);
            document.getElementById(
                "clock"
            ).innerHTML = `<span class="h2 fw-bold text-uppercase text-danger"> Request Expired Try Again </span>`;
            cancelRequest(id);
        } else if (timeout < 0) {
            clearInterval(timer);
            document.getElementById(
                "clock"
            ).innerHTML = `<span class="h2 fw-bold text-uppercase text-danger"> Request Expired Try Again</span>`;
            cancelRequest(id);
        }
    }, 1000);
}

async function postRequestUser(volunteerId, url) {
    // Modal Part
    var requestModal = new bootstrap.Modal(
        document.getElementById("requestWaitingModal"),
        {
            keyboard: false,
        }
    );

    requestModal.show();

    timeout = 30;
    timerStat = "run";

    // End of Modal Part

    let GetVariables = getVariable();
    // console.log(GetVariables.worktype);
    let response = await SendRequest(volunteerId, url, GetVariables);
    countDownControll(response.id);
}

async function SendRequest(volunteerId, url, gets) {
    let data = {
        volunteerId: volunteerId,
        _token: document.getElementById("_token").value,
        details: `Work Type: ${gets.worktype} <br> Work Area: ${gets.area}`,
    };
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
