{"filter":false,"title":"test.php","tooltip":"/test.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":1,"column":0},"end":{"row":1,"column":1},"action":"remove","lines":["("],"id":45}],[{"start":{"row":1,"column":0},"end":{"row":1,"column":1},"action":"insert","lines":["e"],"id":46},{"start":{"row":1,"column":1},"end":{"row":1,"column":2},"action":"insert","lines":["c"]},{"start":{"row":1,"column":2},"end":{"row":1,"column":3},"action":"insert","lines":["h"]},{"start":{"row":1,"column":3},"end":{"row":1,"column":4},"action":"insert","lines":["o"]}],[{"start":{"row":1,"column":4},"end":{"row":1,"column":5},"action":"insert","lines":[" "],"id":47}],[{"start":{"row":1,"column":32},"end":{"row":1,"column":33},"action":"insert","lines":[";"],"id":48}],[{"start":{"row":1,"column":0},"end":{"row":1,"column":33},"action":"remove","lines":["echo $_SERVER['HTTP_USER_AGENT'];"],"id":49},{"start":{"row":1,"column":0},"end":{"row":7,"column":17},"action":"insert","lines":["$arr = [\"Windows Phone\",\"Android\",\"IOS\",\"Windows Mobile\"];","$a = $_SERVER['HTTP_USER_AGENT'];","            if(preg_match(\"~\".implode(\"|\",$arr).\"~\",$a)){","                    echo 'C телефона';","                }else {","                    echo 'С компа';","                }"]}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":50},{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":1,"column":0},"end":{"row":1,"column":22},"action":"insert","lines":["<meta charset=\"UTF-8\">"],"id":51}],[{"start":{"row":2,"column":5},"end":{"row":3,"column":0},"action":"insert","lines":["",""],"id":52},{"start":{"row":3,"column":0},"end":{"row":3,"column":1},"action":"insert","lines":["/"]},{"start":{"row":3,"column":1},"end":{"row":3,"column":2},"action":"insert","lines":["*"]}],[{"start":{"row":10,"column":17},"end":{"row":11,"column":0},"action":"insert","lines":["",""],"id":53},{"start":{"row":11,"column":0},"end":{"row":11,"column":16},"action":"insert","lines":["                "]},{"start":{"row":11,"column":16},"end":{"row":11,"column":17},"action":"insert","lines":["*"]},{"start":{"row":11,"column":17},"end":{"row":11,"column":18},"action":"insert","lines":["/"]}],[{"start":{"row":11,"column":18},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":54},{"start":{"row":12,"column":0},"end":{"row":12,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":12,"column":16},"end":{"row":33,"column":2},"action":"insert","lines":["<?php","if (isset($_GET['width']) AND isset($_GET['height'])) {","  // output the geometry variables","  echo 'Screen width is: '. $_GET['width'] .'<br />","';","  echo 'Screen height is: '. $_GET['height'] .'<br />","';","} else {","  // pass the geometry variables","  // (preserve the original query string","  //  -- post variables will need to handled differently)"," ","  echo '<script language='javascript'>","';","  echo '  location.href= '${_SERVER['SCRIPT_NAME']}?${_SERVER['QUERY_STRING']}'","           . '&width= ' + screen.width +  '&height= ' + screen.height;","';","  echo '</script>","';","  exit();","}","?>"],"id":64}],[{"start":{"row":12,"column":20},"end":{"row":12,"column":21},"action":"remove","lines":["p"],"id":65},{"start":{"row":12,"column":19},"end":{"row":12,"column":20},"action":"remove","lines":["h"]},{"start":{"row":12,"column":18},"end":{"row":12,"column":19},"action":"remove","lines":["p"]},{"start":{"row":12,"column":17},"end":{"row":12,"column":18},"action":"remove","lines":["?"]},{"start":{"row":12,"column":16},"end":{"row":12,"column":17},"action":"remove","lines":["<"]}],[{"start":{"row":24,"column":25},"end":{"row":24,"column":26},"action":"remove","lines":["'"],"id":66}],[{"start":{"row":24,"column":37},"end":{"row":25,"column":0},"action":"remove","lines":["",""],"id":67}],[{"start":{"row":24,"column":35},"end":{"row":24,"column":36},"action":"remove","lines":["'"],"id":68}],[{"start":{"row":25,"column":7},"end":{"row":25,"column":8},"action":"remove","lines":["'"],"id":69}],[{"start":{"row":25,"column":7},"end":{"row":25,"column":9},"action":"insert","lines":["\"\""],"id":70}],[{"start":{"row":25,"column":8},"end":{"row":25,"column":9},"action":"remove","lines":["\""],"id":71}],[{"start":{"row":27,"column":0},"end":{"row":27,"column":1},"action":"remove","lines":["'"],"id":72}],[{"start":{"row":27,"column":0},"end":{"row":27,"column":1},"action":"insert","lines":["\""],"id":73}],[{"start":{"row":12,"column":0},"end":{"row":32,"column":2},"action":"remove","lines":["                ","if (isset($_GET['width']) AND isset($_GET['height'])) {","  // output the geometry variables","  echo 'Screen width is: '. $_GET['width'] .'<br />","';","  echo 'Screen height is: '. $_GET['height'] .'<br />","';","} else {","  // pass the geometry variables","  // (preserve the original query string","  //  -- post variables will need to handled differently)"," ","  echo '<script language=javascript>';","  echo \"  location.href= '${_SERVER['SCRIPT_NAME']}?${_SERVER['QUERY_STRING']}'","           . '&width= ' + screen.width +  '&height= ' + screen.height;","\";","  echo '</script>","';","  exit();","}","?>"],"id":74},{"start":{"row":12,"column":0},"end":{"row":13,"column":17},"action":"insert","lines":["$screenWidth='<script type=\"text/javascript\">document.write(\"screen.width=\"+screen.width);</script>';","echo$screenWidth;"]}],[{"start":{"row":13,"column":17},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":75}],[{"start":{"row":14,"column":0},"end":{"row":15,"column":17},"action":"insert","lines":["$screenWidth='<script type=\"text/javascript\">document.write(\"screen.width=\"+screen.width);</script>';","echo$screenWidth;"],"id":76}],[{"start":{"row":14,"column":7},"end":{"row":14,"column":12},"action":"remove","lines":["Width"],"id":77},{"start":{"row":14,"column":7},"end":{"row":14,"column":8},"action":"insert","lines":["H"]},{"start":{"row":14,"column":8},"end":{"row":14,"column":9},"action":"insert","lines":["e"]},{"start":{"row":14,"column":9},"end":{"row":14,"column":10},"action":"insert","lines":["i"]},{"start":{"row":14,"column":10},"end":{"row":14,"column":11},"action":"insert","lines":["g"]},{"start":{"row":14,"column":11},"end":{"row":14,"column":12},"action":"insert","lines":["h"]},{"start":{"row":14,"column":12},"end":{"row":14,"column":13},"action":"insert","lines":["t"]}],[{"start":{"row":14,"column":69},"end":{"row":14,"column":74},"action":"remove","lines":["width"],"id":78},{"start":{"row":14,"column":69},"end":{"row":14,"column":70},"action":"insert","lines":["h"]},{"start":{"row":14,"column":70},"end":{"row":14,"column":71},"action":"insert","lines":["e"]},{"start":{"row":14,"column":71},"end":{"row":14,"column":72},"action":"insert","lines":["i"]},{"start":{"row":14,"column":72},"end":{"row":14,"column":73},"action":"insert","lines":["g"]},{"start":{"row":14,"column":73},"end":{"row":14,"column":74},"action":"insert","lines":["h"]},{"start":{"row":14,"column":74},"end":{"row":14,"column":75},"action":"insert","lines":["t"]}],[{"start":{"row":14,"column":85},"end":{"row":14,"column":90},"action":"remove","lines":["width"],"id":79},{"start":{"row":14,"column":85},"end":{"row":14,"column":86},"action":"insert","lines":["h"]},{"start":{"row":14,"column":86},"end":{"row":14,"column":87},"action":"insert","lines":["e"]},{"start":{"row":14,"column":87},"end":{"row":14,"column":88},"action":"insert","lines":["i"]},{"start":{"row":14,"column":88},"end":{"row":14,"column":89},"action":"insert","lines":["g"]},{"start":{"row":14,"column":89},"end":{"row":14,"column":90},"action":"insert","lines":["h"]},{"start":{"row":14,"column":90},"end":{"row":14,"column":91},"action":"insert","lines":["t"]}],[{"start":{"row":15,"column":11},"end":{"row":15,"column":16},"action":"remove","lines":["Width"],"id":80},{"start":{"row":15,"column":11},"end":{"row":15,"column":12},"action":"insert","lines":["H"]},{"start":{"row":15,"column":12},"end":{"row":15,"column":13},"action":"insert","lines":["e"]},{"start":{"row":15,"column":13},"end":{"row":15,"column":14},"action":"insert","lines":["o"]}],[{"start":{"row":15,"column":13},"end":{"row":15,"column":14},"action":"remove","lines":["o"],"id":81}],[{"start":{"row":15,"column":13},"end":{"row":15,"column":14},"action":"insert","lines":["i"],"id":82},{"start":{"row":15,"column":14},"end":{"row":15,"column":15},"action":"insert","lines":["g"]},{"start":{"row":15,"column":15},"end":{"row":15,"column":16},"action":"insert","lines":["h"]},{"start":{"row":15,"column":16},"end":{"row":15,"column":17},"action":"insert","lines":["t"]}],[{"start":{"row":13,"column":16},"end":{"row":13,"column":17},"action":"insert","lines":["."],"id":83}],[{"start":{"row":13,"column":16},"end":{"row":13,"column":17},"action":"remove","lines":["."],"id":84}],[{"start":{"row":13,"column":16},"end":{"row":13,"column":17},"action":"insert","lines":[","],"id":85}],[{"start":{"row":13,"column":17},"end":{"row":13,"column":19},"action":"insert","lines":["\"\""],"id":86}],[{"start":{"row":13,"column":17},"end":{"row":13,"column":19},"action":"remove","lines":["\"\""],"id":87},{"start":{"row":13,"column":16},"end":{"row":13,"column":17},"action":"remove","lines":[","]}],[{"start":{"row":13,"column":16},"end":{"row":13,"column":17},"action":"insert","lines":["."],"id":88}],[{"start":{"row":13,"column":17},"end":{"row":13,"column":19},"action":"insert","lines":["\"\""],"id":89}],[{"start":{"row":13,"column":18},"end":{"row":13,"column":19},"action":"insert","lines":["<"],"id":90},{"start":{"row":13,"column":19},"end":{"row":13,"column":20},"action":"insert","lines":["h"]},{"start":{"row":13,"column":20},"end":{"row":13,"column":21},"action":"insert","lines":["r"]},{"start":{"row":13,"column":21},"end":{"row":13,"column":22},"action":"insert","lines":[">"]}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"insert","lines":["Б"],"id":91}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"remove","lines":["Б"],"id":92}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"insert","lines":["<"],"id":93},{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"insert","lines":["s"]},{"start":{"row":0,"column":2},"end":{"row":0,"column":3},"action":"insert","lines":["t"]},{"start":{"row":0,"column":3},"end":{"row":0,"column":4},"action":"insert","lines":["y"]},{"start":{"row":0,"column":4},"end":{"row":0,"column":5},"action":"insert","lines":["l"]},{"start":{"row":0,"column":5},"end":{"row":0,"column":6},"action":"insert","lines":["e"]},{"start":{"row":0,"column":6},"end":{"row":0,"column":7},"action":"insert","lines":["<"]}],[{"start":{"row":0,"column":6},"end":{"row":0,"column":7},"action":"remove","lines":["<"],"id":94}],[{"start":{"row":0,"column":6},"end":{"row":0,"column":15},"action":"insert","lines":["></style>"],"id":95}],[{"start":{"row":0,"column":7},"end":{"row":2,"column":0},"action":"insert","lines":["","    ",""],"id":96}],[{"start":{"row":1,"column":4},"end":{"row":1,"column":5},"action":"insert","lines":["{"],"id":97},{"start":{"row":1,"column":5},"end":{"row":1,"column":6},"action":"insert","lines":["h"]},{"start":{"row":1,"column":6},"end":{"row":1,"column":7},"action":"insert","lines":["t"]},{"start":{"row":1,"column":7},"end":{"row":1,"column":8},"action":"insert","lines":["m"]}],[{"start":{"row":1,"column":7},"end":{"row":1,"column":8},"action":"remove","lines":["m"],"id":98},{"start":{"row":1,"column":6},"end":{"row":1,"column":7},"action":"remove","lines":["t"]},{"start":{"row":1,"column":5},"end":{"row":1,"column":6},"action":"remove","lines":["h"]},{"start":{"row":1,"column":4},"end":{"row":1,"column":5},"action":"remove","lines":["{"]},{"start":{"row":1,"column":0},"end":{"row":1,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":1,"column":0},"end":{"row":1,"column":1},"action":"insert","lines":["h"],"id":99},{"start":{"row":1,"column":1},"end":{"row":1,"column":2},"action":"insert","lines":["t"]},{"start":{"row":1,"column":2},"end":{"row":1,"column":3},"action":"insert","lines":["m"]},{"start":{"row":1,"column":3},"end":{"row":1,"column":4},"action":"insert","lines":["l"]},{"start":{"row":1,"column":4},"end":{"row":1,"column":5},"action":"insert","lines":["{"]}],[{"start":{"row":1,"column":5},"end":{"row":3,"column":1},"action":"insert","lines":["","    ","}"],"id":100}],[{"start":{"row":2,"column":4},"end":{"row":2,"column":5},"action":"insert","lines":["w"],"id":101},{"start":{"row":2,"column":5},"end":{"row":2,"column":6},"action":"insert","lines":["i"]},{"start":{"row":2,"column":6},"end":{"row":2,"column":7},"action":"insert","lines":["d"]},{"start":{"row":2,"column":7},"end":{"row":2,"column":8},"action":"insert","lines":["t"]},{"start":{"row":2,"column":8},"end":{"row":2,"column":9},"action":"insert","lines":["h"]}],[{"start":{"row":2,"column":9},"end":{"row":2,"column":11},"action":"insert","lines":[":;"],"id":102}],[{"start":{"row":2,"column":11},"end":{"row":3,"column":0},"action":"insert","lines":["",""],"id":103},{"start":{"row":3,"column":0},"end":{"row":3,"column":4},"action":"insert","lines":["    "]},{"start":{"row":3,"column":4},"end":{"row":3,"column":5},"action":"insert","lines":["h"]},{"start":{"row":3,"column":5},"end":{"row":3,"column":6},"action":"insert","lines":["e"]},{"start":{"row":3,"column":6},"end":{"row":3,"column":7},"action":"insert","lines":["i"]},{"start":{"row":3,"column":7},"end":{"row":3,"column":8},"action":"insert","lines":["g"]},{"start":{"row":3,"column":8},"end":{"row":3,"column":9},"action":"insert","lines":["h"]},{"start":{"row":3,"column":9},"end":{"row":3,"column":10},"action":"insert","lines":["t"]}],[{"start":{"row":3,"column":10},"end":{"row":3,"column":12},"action":"insert","lines":[":;"],"id":104}],[{"start":{"row":2,"column":10},"end":{"row":2,"column":11},"action":"insert","lines":["3"],"id":105},{"start":{"row":2,"column":11},"end":{"row":2,"column":12},"action":"insert","lines":["0"]}],[{"start":{"row":2,"column":11},"end":{"row":2,"column":12},"action":"remove","lines":["0"],"id":106}],[{"start":{"row":2,"column":11},"end":{"row":2,"column":12},"action":"insert","lines":["6"],"id":107},{"start":{"row":2,"column":12},"end":{"row":2,"column":13},"action":"insert","lines":["0"]}],[{"start":{"row":3,"column":11},"end":{"row":3,"column":12},"action":"insert","lines":["6"],"id":108},{"start":{"row":3,"column":12},"end":{"row":3,"column":13},"action":"insert","lines":["4"]},{"start":{"row":3,"column":13},"end":{"row":3,"column":14},"action":"insert","lines":["0"]}],[{"start":{"row":20,"column":18},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":109},{"start":{"row":21,"column":0},"end":{"row":22,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":22,"column":0},"end":{"row":22,"column":53},"action":"insert","lines":["document.getElementsByTagName('html')[0].style.width;"],"id":110}],[{"start":{"row":22,"column":52},"end":{"row":22,"column":53},"action":"remove","lines":[";"],"id":111}],[{"start":{"row":22,"column":52},"end":{"row":22,"column":53},"action":"insert","lines":[" "],"id":112},{"start":{"row":22,"column":53},"end":{"row":22,"column":54},"action":"insert","lines":["="]}],[{"start":{"row":22,"column":54},"end":{"row":22,"column":55},"action":"insert","lines":[" "],"id":113}],[{"start":{"row":22,"column":55},"end":{"row":22,"column":67},"action":"insert","lines":["screen.width"],"id":114}],[{"start":{"row":22,"column":67},"end":{"row":22,"column":68},"action":"insert","lines":[";"],"id":115}],[{"start":{"row":22,"column":68},"end":{"row":23,"column":68},"action":"insert","lines":["","document.getElementsByTagName('html')[0].style.width = screen.width;"],"id":116}],[{"start":{"row":23,"column":47},"end":{"row":23,"column":52},"action":"remove","lines":["width"],"id":117},{"start":{"row":23,"column":47},"end":{"row":23,"column":48},"action":"insert","lines":["h"]},{"start":{"row":23,"column":48},"end":{"row":23,"column":49},"action":"insert","lines":["e"]},{"start":{"row":23,"column":49},"end":{"row":23,"column":50},"action":"insert","lines":["i"]},{"start":{"row":23,"column":50},"end":{"row":23,"column":51},"action":"insert","lines":["g"]},{"start":{"row":23,"column":51},"end":{"row":23,"column":52},"action":"insert","lines":["h"]},{"start":{"row":23,"column":52},"end":{"row":23,"column":53},"action":"insert","lines":["t"]}],[{"start":{"row":23,"column":63},"end":{"row":23,"column":68},"action":"remove","lines":["width"],"id":118},{"start":{"row":23,"column":63},"end":{"row":23,"column":64},"action":"insert","lines":["h"]},{"start":{"row":23,"column":64},"end":{"row":23,"column":65},"action":"insert","lines":["e"]},{"start":{"row":23,"column":65},"end":{"row":23,"column":66},"action":"insert","lines":["i"]},{"start":{"row":23,"column":66},"end":{"row":23,"column":67},"action":"insert","lines":["g"]},{"start":{"row":23,"column":67},"end":{"row":23,"column":68},"action":"insert","lines":["h"]},{"start":{"row":23,"column":68},"end":{"row":23,"column":69},"action":"insert","lines":["t"]}],[{"start":{"row":22,"column":0},"end":{"row":23,"column":70},"action":"remove","lines":["document.getElementsByTagName('html')[0].style.width = screen.width;","document.getElementsByTagName('html')[0].style.height = screen.height;"],"id":119}],[{"start":{"row":5,"column":8},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":120},{"start":{"row":6,"column":0},"end":{"row":6,"column":1},"action":"insert","lines":["<"]},{"start":{"row":6,"column":1},"end":{"row":6,"column":2},"action":"insert","lines":["s"]}],[{"start":{"row":6,"column":1},"end":{"row":6,"column":2},"action":"remove","lines":["s"],"id":121},{"start":{"row":6,"column":1},"end":{"row":6,"column":47},"action":"insert","lines":["script type=\"text/javascript\" src=\"\"></script>"]}],[{"start":{"row":6,"column":7},"end":{"row":6,"column":38},"action":"remove","lines":[" type=\"text/javascript\" src=\"\">"],"id":124}],[{"start":{"row":6,"column":7},"end":{"row":6,"column":17},"action":"insert","lines":["></script>"],"id":125}],[{"start":{"row":6,"column":8},"end":{"row":8,"column":0},"action":"insert","lines":["","    ",""],"id":126}],[{"start":{"row":8,"column":0},"end":{"row":8,"column":1},"action":"remove","lines":["<"],"id":127},{"start":{"row":8,"column":0},"end":{"row":8,"column":1},"action":"remove","lines":["/"]},{"start":{"row":8,"column":0},"end":{"row":8,"column":1},"action":"remove","lines":["s"]},{"start":{"row":8,"column":0},"end":{"row":8,"column":1},"action":"remove","lines":["c"]},{"start":{"row":8,"column":0},"end":{"row":8,"column":1},"action":"remove","lines":["r"]},{"start":{"row":8,"column":0},"end":{"row":8,"column":1},"action":"remove","lines":["i"]},{"start":{"row":8,"column":0},"end":{"row":8,"column":1},"action":"remove","lines":["p"]},{"start":{"row":8,"column":0},"end":{"row":8,"column":1},"action":"remove","lines":["t"]},{"start":{"row":8,"column":0},"end":{"row":8,"column":1},"action":"remove","lines":[">"]}],[{"start":{"row":7,"column":1},"end":{"row":8,"column":70},"action":"insert","lines":["document.getElementsByTagName('html')[0].style.width = screen.width;","document.getElementsByTagName('html')[0].style.height = screen.height;"],"id":128}],[{"start":{"row":7,"column":0},"end":{"row":7,"column":1},"action":"remove","lines":[" "],"id":129}],[{"start":{"row":7,"column":0},"end":{"row":7,"column":1},"action":"insert","lines":["b"],"id":130},{"start":{"row":7,"column":1},"end":{"row":7,"column":2},"action":"insert","lines":["v"]}],[{"start":{"row":7,"column":1},"end":{"row":7,"column":2},"action":"remove","lines":["v"],"id":131},{"start":{"row":7,"column":0},"end":{"row":7,"column":1},"action":"remove","lines":["b"]}],[{"start":{"row":7,"column":0},"end":{"row":7,"column":1},"action":"insert","lines":["v"],"id":132},{"start":{"row":7,"column":1},"end":{"row":7,"column":2},"action":"insert","lines":["a"]},{"start":{"row":7,"column":2},"end":{"row":7,"column":3},"action":"insert","lines":["r"]}],[{"start":{"row":7,"column":3},"end":{"row":7,"column":4},"action":"insert","lines":[" "],"id":133},{"start":{"row":7,"column":4},"end":{"row":7,"column":5},"action":"insert","lines":["a"]}],[{"start":{"row":7,"column":5},"end":{"row":7,"column":6},"action":"insert","lines":[" "],"id":134},{"start":{"row":7,"column":6},"end":{"row":7,"column":7},"action":"insert","lines":["="]}],[{"start":{"row":8,"column":0},"end":{"row":8,"column":1},"action":"insert","lines":["v"],"id":135},{"start":{"row":8,"column":1},"end":{"row":8,"column":2},"action":"insert","lines":["a"]},{"start":{"row":8,"column":2},"end":{"row":8,"column":3},"action":"insert","lines":["r"]}],[{"start":{"row":8,"column":3},"end":{"row":8,"column":4},"action":"insert","lines":[" "],"id":136},{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"insert","lines":["b"]}],[{"start":{"row":8,"column":5},"end":{"row":8,"column":6},"action":"insert","lines":[" "],"id":137},{"start":{"row":8,"column":6},"end":{"row":8,"column":7},"action":"insert","lines":["="]}],[{"start":{"row":8,"column":7},"end":{"row":8,"column":8},"action":"insert","lines":[" "],"id":138}],[{"start":{"row":7,"column":7},"end":{"row":7,"column":8},"action":"insert","lines":[" "],"id":139}],[{"start":{"row":21,"column":60},"end":{"row":21,"column":88},"action":"remove","lines":["\"screen.width=\"+screen.width"],"id":140}],[{"start":{"row":21,"column":60},"end":{"row":21,"column":61},"action":"insert","lines":["a"],"id":141}],[{"start":{"row":23,"column":61},"end":{"row":23,"column":91},"action":"remove","lines":["\"screen.height=\"+screen.height"],"id":142},{"start":{"row":23,"column":61},"end":{"row":23,"column":62},"action":"insert","lines":["b"]}],[{"start":{"row":26,"column":0},"end":{"row":72,"column":9},"action":"insert","lines":["","","<div class = 'mobcontrols' style = 'display:none;'>","<div class = 'left'>","    ","</div>","<div class = 'right'>","    ","</div>","","</div>","<br>","<br><br><br>","<script>","var a = document.getElementsByTagName('html')[0].style.width = screen.width;","var b = document.getElementsByTagName('html')[0].style.height = screen.height; ","function rightTouchStart(){","    rightPressed = true;","    floImgStand.src = rightMoveArtImg1;","}","","function rightTouchEnd(){","    rightPressed = false;","    floImgStand.src = sitMoveArtImg;","}","","function leftTouchStart(){","    leftPressed = true;","    floImgStand.src = leftMoveArtImg1;","}","","function leftTouchEnd(){","    leftPressed = false;","    floImgStand.src = sitMoveArtImg;","","}","    document.getElementById('panel').style.display='none';","    document.getElementsByClassName('right')[0].addEventListener('touchstart',rightTouchStart);","    document.getElementsByClassName('right')[0].addEventListener('touchend',rightTouchEnd);","    document.getElementsByClassName('left')[0].addEventListener('touchstart',leftTouchStart);","    document.getElementsByClassName('left')[0].addEventListener('touchend',leftTouchEnd);","    ","alert(document.getElementsByTagName('html')[0].style.width);","alert(document.getElementsByTagName('html')[0].style.height);","alert(document.getElementById('myCanvas').width);","alert(document.getElementById('myCanvas').height);","</script>"],"id":143}],[{"start":{"row":27,"column":0},"end":{"row":27,"column":1},"action":"insert","lines":["<"],"id":144},{"start":{"row":27,"column":1},"end":{"row":27,"column":2},"action":"insert","lines":["h"]},{"start":{"row":27,"column":2},"end":{"row":27,"column":3},"action":"insert","lines":["t"]},{"start":{"row":27,"column":3},"end":{"row":27,"column":4},"action":"insert","lines":[","]}],[{"start":{"row":27,"column":3},"end":{"row":27,"column":4},"action":"remove","lines":[","],"id":145}],[{"start":{"row":27,"column":3},"end":{"row":27,"column":4},"action":"insert","lines":["m"],"id":146},{"start":{"row":27,"column":4},"end":{"row":27,"column":5},"action":"insert","lines":["l"]},{"start":{"row":27,"column":5},"end":{"row":27,"column":6},"action":"insert","lines":[">"]}],[{"start":{"row":72,"column":9},"end":{"row":73,"column":0},"action":"insert","lines":["",""],"id":147},{"start":{"row":73,"column":0},"end":{"row":73,"column":1},"action":"insert","lines":["<"]},{"start":{"row":73,"column":1},"end":{"row":73,"column":2},"action":"insert","lines":["/"]},{"start":{"row":73,"column":2},"end":{"row":73,"column":3},"action":"insert","lines":["h"]},{"start":{"row":73,"column":3},"end":{"row":73,"column":4},"action":"insert","lines":["t"]},{"start":{"row":73,"column":4},"end":{"row":73,"column":5},"action":"insert","lines":[","]},{"start":{"row":73,"column":5},"end":{"row":73,"column":6},"action":"insert","lines":["l"]}],[{"start":{"row":73,"column":5},"end":{"row":73,"column":6},"action":"remove","lines":["l"],"id":148},{"start":{"row":73,"column":4},"end":{"row":73,"column":5},"action":"remove","lines":[","]}],[{"start":{"row":73,"column":4},"end":{"row":73,"column":5},"action":"insert","lines":["m"],"id":149},{"start":{"row":73,"column":5},"end":{"row":73,"column":6},"action":"insert","lines":["l"]},{"start":{"row":73,"column":6},"end":{"row":73,"column":7},"action":"insert","lines":[">"]}],[{"start":{"row":25,"column":0},"end":{"row":25,"column":1},"action":"insert","lines":["<"],"id":150},{"start":{"row":25,"column":1},"end":{"row":25,"column":2},"action":"insert","lines":["/"]}],[{"start":{"row":25,"column":1},"end":{"row":25,"column":2},"action":"remove","lines":["/"],"id":151},{"start":{"row":25,"column":0},"end":{"row":25,"column":1},"action":"remove","lines":["<"]}],[{"start":{"row":25,"column":0},"end":{"row":25,"column":1},"action":"insert","lines":["?"],"id":152},{"start":{"row":25,"column":1},"end":{"row":25,"column":2},"action":"insert","lines":[">"]}],[{"start":{"row":25,"column":2},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":153},{"start":{"row":26,"column":0},"end":{"row":27,"column":0},"action":"insert","lines":["",""]},{"start":{"row":27,"column":0},"end":{"row":28,"column":0},"action":"insert","lines":["",""]},{"start":{"row":28,"column":0},"end":{"row":29,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":20,"column":16},"end":{"row":20,"column":18},"action":"remove","lines":["*/"],"id":154}],[{"start":{"row":24,"column":18},"end":{"row":24,"column":20},"action":"insert","lines":["*/"],"id":155}],[{"start":{"row":0,"column":0},"end":{"row":10,"column":22},"action":"remove","lines":["<style>","html{","    width:360;","    height:640;","}","</style>","<script>","var a = document.getElementsByTagName('html')[0].style.width = screen.width;","var b = document.getElementsByTagName('html')[0].style.height = screen.height;   ","</script>","<meta charset=\"UTF-8\">"],"id":156}]]},"ace":{"folds":[],"scrolltop":154,"scrollleft":0,"selection":{"start":{"row":25,"column":6},"end":{"row":25,"column":6},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":9,"state":"php-comment","mode":"ace/mode/php"}},"timestamp":1522449171226,"hash":"fe67c8706c39839b31cd118fe134d4fc9d16b964"}