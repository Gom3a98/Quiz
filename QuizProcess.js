

let QuiId = document.getElementsByClassName("myId")[0].id;

let request = new XMLHttpRequest();

request.onreadystatechange = function () {


    if(request.readyState==request.DONE)
    {

        let myDiv = document.querySelector("div.inner_class");

        let OuterHTML = document.querySelector("div.main");
        let response = JSON.parse(request.response);
        let str = '';
        var i = 0, howManyTimes = response[1].length;
        function f() {
            str+='<p>'+response[1][i].Quetion+'</p>'
                +'<input type="radio" id="a1" name="answer" value='+response[1][i].FakeAns1 +'>'
                +'<label for="a1">'+response[1][i].FakeAns1 +'</label>'
                +'<input type="radio" id="a2" name="answer" value='+response[1][i].FakeAns2 +'>'
                +'<label for="a2">'+response[1][i].FakeAns2 +'</label>'
                +'<input type="radio" id="a3" name="answer" value='+response[1][i].FakeAns3 +'>'
                +'<label for="a3">'+response[1][i].FakeAns3 +'</label>'
                +'<input type="radio" id="a4" name="answer" value='+response[1][i].Valid +'>'
                +'<label for="a4">'+response[1][i].Valid +'</label>'+
                '<button id="selected">Next</button>';
            myDiv.innerHTML =str;
            str  = '';
            let btn = document.querySelector("button#selected");
            btn.addEventListener('click',function () {
                i++

                alert(document.querySelector('input[name="answer"]:checked').value);
                if( i < howManyTimes ){
                    f();
                    }

            },false)
        }
        f();


    }

};
let url = "http://localhost/Quiz/classes/run/read_single.php?QuizId="+QuiId;
request.open("GET",url,true);
request.send();


