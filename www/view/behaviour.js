let btn = document.querySelector("button#BTN");
let HtmlElement = document.querySelector('div.sub_container');

btn.addEventListener('click',function () {
    let req = new XMLHttpRequest();

    req.onreadystatechange = function ()
    {
        if(req.readyState===req.DONE)
        {
            let res = JSON.parse(req.response);

            let HtmlOutput = '<select name="mySelections">';
            for (let i = 0 ; i<res.length; i++)
            {
                HtmlOutput+='<option value='+i+'><span>'+res[i].QuizTitle+'</span></option>';
            }
            HtmlOutput+='</select>';
            HtmlElement.innerHTML = HtmlOutput;
            let QuizInfo = document.querySelector('div.info');
            let x = document.querySelector("select[name=mySelections]");
            x.addEventListener('change',function () {
                let myItem = x.options[x.selectedIndex].value;
                let QuizDescription = res[myItem].QuizDescription;
                let InfoOutput = '<p>' + QuizDescription + '</p>';
                InfoOutput += '<button id="SelectedBTN">Start</button>';
                QuizInfo.innerHTML = InfoOutput;


                let StartBtn = document.querySelector("button#SelectedBTN");
                StartBtn.addEventListener('click',function () {
                    var url = "MainControler/StartQuiz.php?id="+res[myItem].QuizId;
                    var myWindow = window.open(url, "_self", "width=1200, height=600,scrollbars=yes,status=yes,location = yes");
                   // document.location.replace('MainControler/StartQuiz.php?id='+res[myItem].QuizId);
                    setTimeout(function(){ myWindow.close();alert("Timeout"); }, res[myItem].Duration*60*1000);
                },false);
            },false);
        }
    };
    req.open("GET","http://localhost:8009/api/read.php",true);
    req.send();

});

