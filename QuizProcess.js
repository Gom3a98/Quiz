

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
            let ans = [ '<input type="radio" id="a1" name="answer" value='+response[1][i].FakeAns1 +'>'
                        +'<label for="a1">'+response[1][i].FakeAns1 +'</label>',
                        '<input type="radio" id="a2" name="answer" value='+response[1][i].FakeAns2 +'>'
                        +'<label for="a2">'+response[1][i].FakeAns2 +'</label>',
                        '<input type="radio" id="a3" name="answer" value='+response[1][i].FakeAns3 +'>'
                        +'<label for="a3">'+response[1][i].FakeAns3 +'</label>',
                        '<input type="radio" id="a4" name="answer" value='+response[1][i].Valid +'>'
                        +'<label for="a4">'+response[1][i].Valid +'</label>'
                        ];

            ans = Shuffle(ans);

            str+='<p>'+response[1][i].Quetion+'</p>';
            for(let j = 0 ; j<4;j++)
            {
                str+=ans[j];
            }
                str+='<button id="selected">Next</button>';
            myDiv.innerHTML =str;
            str  = '';
            let btn = document.querySelector("button#selected");
            btn.addEventListener('click',function () {
                i++
                if(document.querySelector('input[name="answer"]:checked').value == Valid)
                {
                    x++;
                }
                if( i < 5 ){
                    f(x);
                    }

                if(i==4)
                    alert(x);

            },false)
        }
        let counter =0;
        f(counter);
        //alert(counter);


    }

};
let url = "http://localhost/Quiz/classes/run/read_single.php?QuizId="+QuiId;
request.open("GET",url,true);
request.send();


