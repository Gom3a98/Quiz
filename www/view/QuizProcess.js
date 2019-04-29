

let QuiId = document.getElementsByClassName("myId")[0].id;

let request = new XMLHttpRequest();

request.onreadystatechange = function () {


    if(request.readyState==request.DONE)
    {

        let myDiv = document.querySelector("div.inner_class");

        let OuterHTML = document.querySelector("div.main");
        let response = JSON.parse(request.response);
        let str = '';
        let i = 0, howManyTimes = response[1].length;
        function Shuffle(array1)
        {
           // let x = Math.random(4);
            Math.random(3)
            let x =Math.round(Math.random()*4);

           let  arr = new Array(4);

            arr[x]  = array1[3];

            let j =0 ;
            for (let i =0 ;i<4;i++)
            {
                if(i!=x)
                {

                    arr[i] = array1[j];
                    j++;

                }

            }

            return arr;
        }
        function f(x) {
            let Valid  = response[1][i].Valid ;
            let ans = [
                        '<label for="a1" class = "radio">'+
                             '<input type="radio" id="a1" name="answer" value='+response[1][i].FakeAns1 +'>'+
                             '<span>'+response[1][i].FakeAns1+'</span>'
                        +'</label>'
                        ,

                        '<label for="a2" class = "radio">'+
                        '<input type="radio" id="a2" name="answer" value='+response[1][i].FakeAns2 +'>'+
                        '<span>'+response[1][i].FakeAns2+'</span>'+
                        '</label>'
                        ,

                        '<label for="a3" class = "radio">'+
                        '<input type="radio" id="a3" name="answer" value='+response[1][i].FakeAns3 +'>'+
                        '<span>'+response[1][i].FakeAns3+'</span>'+
                        '</label>'
                        ,
                        '<label for="a4" class = "radio">'+
                        '<input type="radio" id="a4" name="answer" value='+response[1][i].Valid +'>'+
                        '<span>'+response[1][i].Valid+'</span>'+
                        '</label>'
                        ];

            ans = Shuffle(ans);

            str+='<p>'+response[1][i].Quetion+'</p>';
            str+='<div class = "ans_class">';
            for(let j = 0 ; j<4;j++)
            {
                str+=ans[j];
            }
            str+='</div>';
                str+='<button id="selected">Next >></button>';
            myDiv.innerHTML =str;
            str  = '';
            let btn = document.querySelector("button#selected");
            btn.addEventListener('click',function () {
                i++
                if(document.querySelector('input[name="answer"]:checked').value == Valid)
                {
                    alert('true');
                    x++;
                }
                else
                    alert('false');
                if( i < howManyTimes ){
                    f(x);
                    }

                if(i==howManyTimes) {
                    alert("Your Score is " + x);
                    document.location.replace('../index.php');
                }

            },false)
        }
        let counter =0;
        f(counter);
        //alert(counter);


    }

};

let url = "http://localhost:8009/api/read_single.php?QuizId="+QuiId;
request.open("GET",url,true);
request.send();


