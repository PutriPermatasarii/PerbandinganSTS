<?php
if (isset($_POST['submit'])) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    if ($number1 == $number2) {
        $keterangan = "$number1 sama dengan $number2";
        $operator = "=";
    } elseif ($number1 > $number2) {
        $keterangan = "$number1 lebih besar dari $number2";
        $operator = ">";
    } else {
        $keterangan = "$number1 lebih kecil dari $number2";
        $operator = "<";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: rgb(249, 157, 222);
    background-size: 100%;
    background-repeat: no-repeat;
}

.container {
    width: 50%;
    margin: 200px auto;
    padding: 20px;
    background-color: rgb(250, 10, 170);
    border-radius: 8px;
    box-shadow: 0 0 10px rgb(253, 7, 195);
    border-style: dotted;
    border-color: blue;
}

h2 {
    text-align: center;
}

form {
    text-align: center;
}

label {
    font-weight: bold;
}

input[type="number"] {
    padding: 8px;
    margin: 5px;
    border-radius: 4px;
    border: 1px solid #ccc;
}

input[type="submit"] {
    padding: 10px 20px;
    border-color: rgb(236, 49, 168);
    color: ;
    border-style: solid;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    background-color:rgb(249, 157, 222) ;
}

input[type="submit"]:hover {
    background-color:rgb(214, 29, 146);
    
}

p {
    text-align: center;
    margin-top: 80px;
}

h4 {
    text-align: center;
}

.flex {
    display: flex;
    justify-content: center;
    color: black;
}

.oper {
    font-size: 30px;
}

</style>
</head>
<body>
<div class="container">
        <p class="oper" style="color:yellow"><?php if (isset($operator)) echo $operator; ?></p>
        <h4><?php if (isset($keterangan)) echo $keterangan; ?></h4>
        <p>Cek Perbandingan Angka</p>
        <form method="post">
            <div class="flex">
                <label for="number1"></label>
                <input type="number" name="number1" id="number1" placeholder="angka pertama" required><br><br>

                <label for="number2"></label>
                <input type="number" name="number2" id="number2" placeholder="angka kedua" required><br><br>

                <input type="submit" name="submit" value="kirim">
            </div>
        </form>
    </div>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>