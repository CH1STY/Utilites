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

async function postRequestUser(volunteerId,url) { 
    let GetVariables = getVariable();
    // console.log(GetVariables.worktype);
    let response = await SendRequest(volunteerId,url,GetVariables);
    console.log(response);
}


async function SendRequest(volunteerId,url,gets) {
    let data = {
        volunteerId: volunteerId,
        _token: document.getElementById("_token").value,
        details: `Work Type: ${gets.worktype} Work Area: ${gets.area}`,
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