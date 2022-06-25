<!DOCTYPE HTML>

<html>

<head>
    <title>CombCodeEn</title>
</head>

<body>

<h4>Комбинатор кодов En</h4>
<form>
    Код #1: <input type="text" name="a" id="code_a" onkeyup="calculate(this.value)" /><br />
    Код #2: <input type="text" name="b" id="code_b" onkeyup="calculate(this.value)" /><br />
    Код #3: <input type="text" name="c" id="code_c" onkeyup="calculate(this.value)" /><br />
    Код #4: <input type="text" name="d" id="code_d" onkeyup="calculate(this.value)" /><br />
    Код #5: <input type="text" name="e" id="code_e" onkeyup="calculate(this.value)" /><br />
</form>
<p>Коды: <span id="result"></span></p>

<script type="text/javascript">


    function calculate() {

        var code_a = document.getElementById('code_a').value; // получить значение поля 'a' из формы
        var code_b = document.getElementById('code_b').value; // получить значение поля 'b' из формы
        var code_c = document.getElementById('code_c').value; // получить значение поля 'a' из формы
        var code_d = document.getElementById('code_d').value; // получить значение поля 'b' из формы
        var code_e = document.getElementById('code_e').value; // получить значение поля 'a' из формы

        var ajaxObject = new XMLHttpRequest(); // создать новый объект XMLHttpRequest
        ajaxObject.open('POST', 'ajax.php'); // открыть соединение
        ajaxObject.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); // установить формат содержимого POST-запроса
        ajaxObject.send('code_a=' + encodeURIComponent(code_a) + '&code_b=' + encodeURIComponent(code_b) + '&code_c=' + encodeURIComponent(code_c) + '&code_d=' + encodeURIComponent(code_d) + '&code_e=' + encodeURIComponent(code_e)); // отправить POST-запрос

        ajaxObject.onreadystatechange = function() { // установить функцию-обработчик изменения свойства readyState
            if (ajaxObject.readyState == 4) { // если readyState стало 4, т.е. ответ от сервера пришел и готов к обработке
                if(ajaxObject.status == 200) { // и если ответ успешен
                    document.getElementById('result').innerHTML = ajaxObject.responseText; // выводим ответ сервера пользователю в <span id="calculate"></span>
                }
            }
        }
    }

</script>

</body>

</html>