<?php
    $answer = $_COOKIE["answer"];
    $ansArr = array();
    $ansArr = ['19070231', '19070311', '19070522', '19071131', '19071821',
    '19072221', '19072922', '19080133', '19081421', '19081632', '19082032',
    '19082131', '19090222', '19090631', '19092521', '19092711'];
    shuffle($ansArr);
    $result = array_diff($ansArr, array($answer));
    $result = array_values($result);
    $shuffleArr = array();
    $shuffleArr = [$answer, $result[0], $result[1], $result[2]];
    shuffle($shuffleArr);

 ?>
<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
  <body>

    <input type="text" id="clock" value="0">

    <script>
        let progress;
        function chk(txt){
            progress = getCookie('progress');
            let tryCnt = getCookie('try');
            let src = $('#'+txt).attr('src');
            let str = src.split("/");
            let clock = document.getElementById('clock').value;
            alert(clock);
            setCookie("clock", clock, '1');
            alert(src);
            alert(clock);
            setCookie('subAns', str[1], '1');
            setCookie('phpSubAns', src, '1');
            let answer = getCookie('answer');
            if(tryCnt == 1){
                if(answer == str[1]){
                  alert('정답');
                  progress *= 1;
                  progress += 1;
                  setCookie('progress', progress, '1');
                } else {
                  let wrong = getCookie('wrong');
                  alert('오답');
                  wrong *= 1;
                  wrong += 1;
                  progress *= 1;
                  progress += 1;
                  setCookie('progress', progress, '1');
                  setCookie('wrong', wrong, '1');
                }

                location.href='trySub.php';
            } else {
                let num1 = $('#addImg').attr('src');
                let num2 = $('#addImg2').attr('src');
                let num3 = $('#addImg3').attr('src');
                let num4 = $('#addImg4').attr('src');

                num1 = num1.split("/");
                num1 = num1[1]+"/"+num1[2];

                num2 = num2.split("/");
                num2 = num2[1]+"/"+num2[2];

                num3 = num3.split("/");
                num3 = num3[1]+"/"+num3[2];

                num4 = num4.split("/");
                num4 = num4[1]+"/"+num4[2];

                setCookie('num1', num1, '1');
                setCookie('num2', num2, '1');
                setCookie('num3', num3, '1');
                setCookie('num4', num4, '1');

                location.href='sample_confidence.php';
            }

        }
        window.onload = () => {
              let tryCnt = getCookie('try');
              if(tryCnt == 0) {
                  progress = getCookie('progress');
                  console.log('progress : '+ progress);
                  console.log('문제 답안 : ' +getCookie('answer'));
                  let addImg = document.createElement('img');
                  addImg.setAttribute("id", "addImg");
                  addImg.setAttribute("src", "sample_for_dev_mc/<?php echo $shuffleArr[0]; ?>/S001L1E01C7.jpg");
                  addImg.style.width = "200px";
                  addImg.style.height = "200px";
                  addImg.addEventListener('click', () => {
                      chk(addImg.id);
                  });
                  let addImg2 = document.createElement('img');
                  addImg2.setAttribute("id", "addImg2");
                  addImg2.setAttribute("src", "sample_for_dev_mc/<?php echo $shuffleArr[1]; ?>/S001L1E01C7.jpg");
                  addImg2.style.width = "200px";
                  addImg2.style.height = "200px";
                  addImg2.addEventListener('click', () => {
                      chk(addImg2.id);
                  });
                  let addImg3 = document.createElement('img');
                  addImg3.setAttribute("id", "addImg3");
                  addImg3.setAttribute("src", "sample_for_dev_mc/<?php echo $shuffleArr[2]; ?>/S001L1E01C7.jpg");
                  addImg3.style.width = "200px";
                  addImg3.style.height = "200px";
                  addImg3.addEventListener('click', () => {
                      chk(addImg3.id);
                  });
                  let addImg4 = document.createElement('img');
                  addImg4.setAttribute("id", "addImg4");
                  addImg4.setAttribute("src", "sample_for_dev_mc/<?php echo $shuffleArr[3]; ?>/S001L1E01C7.jpg");
                  addImg4.style.width = "200px";
                  addImg4.style.height = "200px";
                  addImg4.addEventListener('click', () => {
                      chk(addImg4.id);
                  });
                  document.body.appendChild(addImg);
                  document.body.appendChild(addImg2);
                  document.body.appendChild(addImg3);
                  document.body.appendChild(addImg4);

              } else {
                  let num1 = getCookie('num1');
                  let num2 = getCookie('num2');
                  let num3 = getCookie('num3');
                  let num4 = getCookie('num4');
                  let arr = [num1, num2, num3, num4];
                  let subAns = getCookie('subAns');
                  for(let i = 0; i < arr.length; i++){
                      if(arr[i].includes(subAns) === true){
                          console.log("빼기 :" +arr[i]);
                          arr.splice(i, 1);
                      }

                  }
                  let addImg = document.createElement('img');
                  addImg.setAttribute("id", "addImg");
                  addImg.setAttribute("src", "sample_for_dev_mc/"+arr[0]);
                  addImg.style.width = "200px";
                  addImg.style.height = "200px";
                  addImg.addEventListener('click', () => {
                      chk(addImg.id);
                  });
                  let addImg2 = document.createElement('img');
                  addImg2.setAttribute("id", "addImg2");
                  addImg2.setAttribute("src", "sample_for_dev_mc/"+arr[1]);
                  addImg2.style.width = "200px";
                  addImg2.style.height = "200px";
                  addImg2.addEventListener('click', () => {
                      chk(addImg2.id);
                  });
                  let addImg3 = document.createElement('img');
                  addImg3.setAttribute("id", "addImg3");
                  addImg3.setAttribute("src", "sample_for_dev_mc/"+arr[2]);
                  addImg3.style.width = "200px";
                  addImg3.style.height = "200px";
                  addImg3.addEventListener('click', () => {
                      chk(addImg3.id);
                  });

                  document.body.appendChild(addImg);
                  document.body.appendChild(addImg2);
                  document.body.appendChild(addImg3);
              }

              setTimeout(()=>{
                  let progress = getCookie('progress');
                  progress *= 1;
                  progress += 1;
                  setCookie('progress', progress, '1');
                  location.href='sample2.php';
              }, 50000);
        }


        function setCookie(cookie_name, value, days) {
            var exdate = new Date();
            exdate.setDate(exdate.getDate() + days);
            var cookie_value = escape(value) + ((days == null) ? '' : '; expires=' + exdate.toUTCString());
            document.cookie = cookie_name + '=' + cookie_value;
        }

        function getCookie(cookie_name) {
          var x, y;
          var val = document.cookie.split(';');
          for (var i = 0; i < val.length; i++) {
            x = val[i].substr(0, val[i].indexOf('='));
            y = val[i].substr(val[i].indexOf('=') + 1);
            x = x.replace(/^\s+|\s+$/g, '');
            if (x == cookie_name) {
              return unescape(y); 
            }
          }
        }

        var seconds = 0;

        function setTimer(){

            seconds++;
            if(seconds == 60){
                seconds = 0;
                if(minutes == 59){
                    minutes = 0;
                    hour += 1;
                } else {
                  minutes++;
                }
            }
            $("#clock").val(seconds);
        }

        setInterval(() => {
          setTimer();
        },1000 );

    </script>

  </body>
</html>
