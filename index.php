<html>
<head>
    <title>Retrive Data</title>
</head>
<body>
<center>
    <h2>Enter User Name</h2>
    <input type="text" id="Parcel" required="required"><br>
    <button type="button" onclick="getdata();">GET</button><br>
</center>
<center>
    <p>Length: <strong id="length"></strong></p>
    <p>Breadth: <strong id="breadth"></strong></p>
    <p>Height: <strong id="height"></strong></p>
</center>



<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.7.0/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-analytics.js"></script>

<script>
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    var firebaseConfig = {
        apiKey: "AIzaSyCCVL5a5gifa9lJ9JSW3JCR84r7ur8gu9w",
        authDomain: "fir-senddata-73949.firebaseapp.com",
        databaseURL: "https://fir-senddata-73949-default-rtdb.firebaseio.com",
        projectId: "fir-senddata-73949",
        storageBucket: "fir-senddata-73949.appspot.com",
        messagingSenderId: "1055015658230",
        appId: "1:1055015658230:web:89c1e2ceb7dca7289b42d7",
        measurementId: "G-Q1YMF10M2K"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);

    //firebase.analytics();
</script>
<script type="text/javascript" src="js/Read.js"></script>
</body>
</html>
