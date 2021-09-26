async function fetchWork(url, myModal) {
    let response = await FetchRequest(url);
    console.log("called");
    if (response !== false) {
        let work_details = document.getElementById("work_details");
        work_details.innerHTML = response.details;
        isFounded = true;
        myModal.show();
        let clsBtn = document.getElementById("clsBtn");
        clsBtn.onclick = ()=>{removeRequest(response)};
    } else {
    }
}

async function removeRequest(id) {
    await cancelRequest(id.id);
    isFounded = false;
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
