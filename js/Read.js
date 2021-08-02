function  getdata(){

    firebase.database().ref('Parcel/').once('value').then(function (snapshot) {

        var length=snapshot.val().Length;
        var height=snapshot.val().Height;
        var breadth=snapshot.val().Width;
        var id=snapshot.val().ID;
        var remark = "Data in Range";

        var wronglength=snapshot.val().Length;
        var wrongbreadth=snapshot.val().Width;
        var wrongheight=snapshot.val().Height;
        var wrongremark = "Range Exceed";

        document.getElementById("id").innerHTML=id;
        var limit = 100;

        if(length > limit){
            document.getElementById("wronglength").innerHTML=wronglength;
            document.getElementById("wrongremark").innerHTML = wrongremark;
        }
        else {
            document.getElementById("length").innerHTML=length;
            document.getElementById("remark").innerHTML = remark;
        }

        if(breadth > limit){
            document.getElementById("wrongbreadth").innerHTML=wrongbreadth;
            document.getElementById("wrongremark").innerHTML = wrongremark;
        }
        else {
            document.getElementById("breadth").innerHTML=breadth;
            document.getElementById("remark").innerHTML = remark;
        }

        if(height > limit){
            document.getElementById("wrongheight").innerHTML=wrongheight;
            document.getElementById("wrongremark").innerHTML = wrongremark;
        }
        else {
            document.getElementById("height").innerHTML=height;
            document.getElementById("remark").innerHTML = remark;
        }



        //document.getElementById("height").innerHTML=height;
        //document.getElementById("breadth").innerHTML=breadth;

    })
}
