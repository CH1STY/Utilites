async function fetchWork(url, myModal) {
    let response = await FetchRequest(url);
    // console.log("called");
    if (response !== false) {
        let work_details = document.getElementById("work_details");
        work_details.innerHTML = response.details;
        isFounded = true;
        myModal.show();
        let smallClsBtn = document.getElementById("smallCls");
        let clsBtn = document.getElementById("clsBtn");
        clsBtn.onclick = () => {
            removeRequest(response);
        };
        smallClsBtn.onclick = () => {
            removeRequest(response);
        };

        acceptBtn = document.getElementById("acceptBtn");
        acceptBtn.onclick = () => {
            onAccept(response, myModal);
        };
    } else {
    }
}

async function removeRequest(id) {
    let response = await isRequestExist(id.id);

    if (response) {
        await cancelRequest(id.id);
    }
    isFounded = false;
}

async function isRequestExist(id) {
    url = `/work/isExist/${id}`;
    const response = await fetch(url, {
        method: "GET",
    });
    return response.json(); // parses JSON response into native JavaScript objects
}

async function cancelRequest(id) {
    url = `/work/remove/${id}`;
    const response = await fetch(url, {
        method: "GET",
    });
    return response.json(); // parses JSON response into native JavaScript objects
}

async function FetchRequest(url) {
    let data = {
        _token: document.getElementById("_token").value,
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

async function onAccept(response, myModal) {
    let isExist = await isRequestExist(response.id);

    if (isExist) {
        let res = await acceptRequest(response.id);
        console.log(res)
        if (res) {
            window.location.replace(`work/ongoing/${response.id}`);
        } else {
            await myModal.hide();
            isFounded = false;

            alert("Request Expired or Canceled by User");
        }
    } else {
        await myModal.hide();
        isFounded = false;

        alert("Request Expired or Canceled by User");
    }
}

async function acceptRequest(id) {
    let url = `work/accept/${id}`;
    const response = await fetch(url, {
        method: "GET",
    });
    return response.json(); // parses JSON response into native JavaScript objects
}
