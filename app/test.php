<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

<form name="mainforms" action="http://crm.cmg-nsk.ru/modules/Webforms/capture.php" method="post" accept-charset="utf-8" enctype="multipart/form-data"><input type="hidden" name="__vtrftk" value="sid:131ef18a13888676d55820057599698b6fe3b113,1491467832">
	<input type="hidden" name="publicid" value="a37902ccc8a6cafc1c84bd19eb7a51c6">
	<input type="hidden" name="name" value="mainforms">
        <input type="hidden" name="VTIGER_RECAPTCHA_PUBLIC_KEY" value="RECAPTCHA PUBLIC KEY FOR THIS DOMAIN">
    	<table>                            								                                																<tbody><tr>

<td><label>Фамилия*</label></td><td>                                                                                                                            										                                        	<input type="text" name="lastname" value="неизвестно" required="">                                        </td></tr>                                								                                																<tr>

<td><label>Имя</label></td><td>                                                                                                                            										                                        	<input type="text" name="firstname" value="">                                        </td></tr>                                								                                																<tr>

<td><label>Тел.</label></td><td>                                                                                                                            										                                        	<input type="text" name="phone" value="">                                        </td></tr>                                								                                																<tr>

<td><label>Источник Обращения</label></td><td>                                                                                                                                                                                                                                                                                                                                                           										                                        <select name="leadsource">
	<option value="">Выберите значение</option>
                                                <option value="Cold Call">Холодный звонок</option>
                                                <option value="Холодный звонок">Холодный звонок</option>
                                                <option value="Почтовая рассылка">Почтовая рассылка</option>
                                                <option value="Веб-сайт">Веб-сайт</option>
                                                <option value="" selected=""></option>
                                                <option value="Existing Customer">Существующий клиент</option>
                                                <option value="Self Generated">Самопроизвольный</option>
                                                <option value="Employee">Сотрудник</option>
                                                <option value="Partner">Партнер</option>
                                                <option value="Public Relations">Публичные связи</option>
                                                <option value="Direct Mail">Почтовая рассылка</option>
                                                <option value="Conference">Конференция</option>
                                                <option value="Trade Show">Выставка</option>
                                                <option value="Web Site">Веб-сайт</option>
                                                <option value="Word of mouth">По наслышке</option>
                                                <option value="Other">Другое</option>
                                                <option value="Из старой CRM">Из старой CRM</option>
                                                </select>

                                        </td></tr>                                								                                																<tr>

<td><label>Город</label></td><td>                                                                                                                            										                                        	<input type="text" name="city" value="">                                        </td></tr>
                                								                                																<tr>

<td><label>Рекламная кампания</label></td><td>                                                                                                                            										                                        	<input type="text" name="label:Рекламная_кампания" value="">                                        </td></tr>
                                								                                																<tr>

<td><label>Ключевое слово</label></td><td>                                                                                                                            										                                        	<input type="text" name="label:Ключевое_слово" value="">                                        </td></tr>
                                								                                																<tr>

<td><label>Источник трафика</label></td><td>                                                                                                                            										                                        	<input type="text" name="label:Источник_трафика" value="">                                        </td></tr>
                                								                                																<tr>

<td><label>ClientidYM</label></td><td>                                                                                                                            										                                        	<input type="text" name="label:ClientidYM" value="">                                        </td></tr>
                                								                                																<tr>

<td><label>Описание</label></td><td>                                                                                    	<textarea name="description"></textarea>
                                        										                                        </td></tr>                                								                                																<tr>

<td><label>Тип транспорта</label></td><td>                                                                                                                                                                                                                                                                                                                                                                                                            										                                                                                    <select name="label:Тип_транспорта[]" multiple="" style="width: 60%;">
                                                <option value="Маршрутка">Маршрутка</option>
                                                <option value="Автобус">Автобус</option>
                                                <option value="Троллейбус">Троллейбус</option>
                                                <option value="Трамвай">Трамвай</option>
                                                </select>
										</td></tr>                               								                                																<tr>

<td><label>Веб-сайт</label></td><td>                                                                                                                            										                                        	<input type="text" name="website" value="">                                        </td></tr>
                                								                                																<tr>

<td><label>Моб.</label></td><td>                                                                                                                            										                                        	<input type="text" name="mobile" value="">                                        </td></tr>
                                								                                																<tr>

<td><label>E-mail</label></td><td>                                                                                                                           										                                        	<input type="email" name="email" value="">                                        </td></tr>
                                								                                																<tr>

<td><label>Бренд</label></td><td>                                                                                                                           										                                        	<input type="text" name="label:Бренд" value="">                                        </td></tr>
                                	</tbody></table>
    <input type="submit" value="Submit">
</form>
            <script  type="text/javascript">window.onload = function() { var N=navigator.appName, ua=navigator.userAgent, tem;var M=ua.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);if(M && (tem= ua.match(/version\/([\.\d]+)/i))!= null) M[2]= tem[1];M=M? [M[1], M[2]]: [N, navigator.appVersion, "-?"];var browserName = M[0];var form = document.forms[0], inputs = form.elements; form.onsubmit = function() { var required = [], att, val; for (var i = 0; i < inputs.length; i++) { att = inputs[i].getAttribute("required"); val = inputs[i].value; type = inputs[i].type; if(type == "email") {if(val != "") {var elemLabel = inputs[i].getAttribute("label");var emailFilter = /^[_/a-zA-Z0-9]+([!"#$%&()*+,./:;<=>?\^_`{|}~-]?[a-zA-Z0-9/_/-])*@[a-zA-Z0-9]+([\_\-\.]?[a-zA-Z0-9]+)*\.([\-\_]?[a-zA-Z0-9])+(\.?[a-zA-Z0-9]+)?$/;var illegalChars= /[\(\)\<\>\,\;\:\"\[\]]/ ;if (!emailFilter.test(val)) {alert("For "+ elemLabel +" field please enter valid email address"); return false;} else if (val.match(illegalChars)) {alert(elemLabel +" field contains illegal characters");return false;}}}if (att != null) { if (val.replace(/^\s+|\s+$/g, "") == "") { required.push(inputs[i].getAttribute("label")); } } } if (required.length > 0) { alert("The following fields are required: " + required.join()); return false; } var numberTypeInputs = document.querySelectorAll("input[type=number]");for (var i = 0; i < numberTypeInputs.length; i++) { val = numberTypeInputs[i].value;var elemLabel = numberTypeInputs[i].getAttribute("label");if(val != "") {var intRegex = /^[+-]?\d+$/;if (!intRegex.test(val)) {alert("For "+ elemLabel +" field please enter valid number"); return false;}}}}; }</script>