function  getdata(){
    var Parcel = document.getElementById("Parcel").value;

    firebase.database().ref('Parcel/'+Parcel).once('value').then(function (snapshot) {

       var length=snapshot.val().Length;
       var height=snapshot.val().Height;
       var breadth=snapshot.val().Breadth;


        document.getElementById("length").innerHTML=length;
        document.getElementById("height").innerHTML=height;
        document.getElementById("breadth").innerHTML=breadth;

    })
}
