<html>
<head>
    <title>Retrive Data</title>
</head>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
     th, td {
        padding: 10px;
         font-size: 20px;
    }
    strong {
        color: red;
    }
    em {
        color: black;
    }
    fa {
        padding: 20px;
    }
</style>

<body>

<center>
<table border="1", style="width: 10%">
    <tr>
        <th>BOX ID</th>
        <th>Length</th>
        <th>Breadth</th>
        <th>Height</th>
        <th>Remark</th>
    </tr>

    <tr>
        <th><p id="id"></p></th>
        <td><fa><em id="length"></em><strong id="wronglength"></strong></fa></td>
        <td><fa><em id="breadth"></em><strong id="wrongbreadth"></strong></fa></td>
        <td><fa><em id="height"></em><strong id="wrongheight"></strong></fa></td>
        <td><em id="remark"></em><strong id="wrongremark"></strong></td>
    </tr>

</table>


</center>
<br>
<center>
        <button type="button" onclick="getdata();">GET</button><br>
</center>



<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.7.1/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-analytics.js"></script>

<script>
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    var firebaseConfig = {
        apiKey: "AIzaSyBc1smFAzN2aMV7mWDkjstmgegN_2RJSas",
        authDomain: "fir-featurelearn.firebaseapp.com",
        databaseURL: "https://fir-featurelearn-default-rtdb.firebaseio.com",
        projectId: "fir-featurelearn",
        storageBucket: "fir-featurelearn.appspot.com",
        messagingSenderId: "1027255264454",
        appId: "1:1027255264454:web:15ac64bf07e9239a8823c7",
        measurementId: "G-6XXVPF8PSS"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();
</script>
<script>
    var connectedRef = firebase.database().ref(".info/connected");
    connectedRef.on("value", (snap) => {
        if (snap.val() === true) {
            console.log("connected");
            window.alert("Connected to server");
        } else {
            console.log("not connected");
            window.alert("Disconnected from server");
        }
    });
</script>
<script>
    var presenceRef = firebase.database().ref("disconnectmessage");
    // Write a string when this client loses connection
    presenceRef.onDisconnect().set("I disconnected!");
</script>

<script type="text/javascript" src="js/Read.js"></script>


</body>
</html>
