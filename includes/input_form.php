<?php
    function input_form($method, $submit_lable) {
        return <<<HTML
        <div class="container">
            <form action="{$method}" class="form">
                <div class="row">
                    <div class="col-6">
                        <fieldset class="fullname-info">
                            <div class="input-wrap d-flex flex-column">
                                <label for="name">Имя *</label>
                                <input type="text" id="name">
                            </div>
                            <div class="input-wrap d-flex flex-column">
                                <label for="surname">Фамилия *</label>
                                <input type="text" id="surname">
                            </div>
                            <div class="input-wrap d-flex flex-column">
                                <label for="patronymic">Отчество *</label>
                                <input type="text" id="patronymic">
                            </div>
                            <button type="submit">{$submit_lable}</button>
                        </fieldset>
                    </div>
                    <div class="col-6">
                        <fieldset class="other-info">
                            <div class="input-wrap d-flex flex-column">
                                <label for="start-age">Год начала обучения *</label>
                                <select name="start-age" id="start-age">
                                    <option value="1970">1970</option>
                                    <option value="1971">1971</option>
                                    <option value="1972">1972</option>
                                    <option value="1973">1973</option>
                                    <option value="1974">1974</option>
                                    <option value="1975">1975</option>
                                    <option value="1976">1976</option>
                                    <option value="1977">1977</option>
                                    <option value="1978">1978</option>
                                    <option value="1979">1979</option>
                                    <option value="1980">1980</option>
                                    <option value="1981">1981</option>
                                    <option value="1982">1982</option>
                                    <option value="1983">1983</option>
                                    <option value="1984">1984</option>
                                    <option value="1985">1985</option>
                                    <option value="1986">1986</option>
                                    <option value="1987">1987</option>
                                    <option value="1988">1988</option>
                                    <option value="1989">1989</option>
                                    <option value="1990">1990</option>
                                    <option value="1991">1991</option>
                                    <option value="1992">1992</option>
                                    <option value="1993">1993</option>
                                    <option value="1994">1994</option>
                                    <option value="1995">1995</option>
                                    <option value="1996">1996</option>
                                    <option value="1997">1997</option>
                                    <option value="1998">1998</option>
                                    <option value="1999">1999</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                </select>
                            </div>
                            <div class="input-wrap d-flex flex-column">
                                <label for="finish-age">Год окончания обучения *</label>
                                <select name="finish-age" id="finish-age">
                                    <option value="1970">1970</option>
                                    <option value="1971">1971</option>
                                    <option value="1972">1972</option>
                                    <option value="1973">1973</option>
                                    <option value="1974">1974</option>
                                    <option value="1975">1975</option>
                                    <option value="1976">1976</option>
                                    <option value="1977">1977</option>
                                    <option value="1978">1978</option>
                                    <option value="1979">1979</option>
                                    <option value="1980">1980</option>
                                    <option value="1981">1981</option>
                                    <option value="1982">1982</option>
                                    <option value="1983">1983</option>
                                    <option value="1984">1984</option>
                                    <option value="1985">1985</option>
                                    <option value="1986">1986</option>
                                    <option value="1987">1987</option>
                                    <option value="1988">1988</option>
                                    <option value="1989">1989</option>
                                    <option value="1990">1990</option>
                                    <option value="1991">1991</option>
                                    <option value="1992">1992</option>
                                    <option value="1993">1993</option>
                                    <option value="1994">1994</option>
                                    <option value="1995">1995</option>
                                    <option value="1996">1996</option>
                                    <option value="1997">1997</option>
                                    <option value="1998">1998</option>
                                    <option value="1999">1999</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                </select>
                            </div>
                            <div class="input-wrap d-flex flex-column">
                                <label for="specialty">Специальность *</label>
                                <select name="speciality" id="specialty">
                                    <option value="Гостиничный сервис">Гостиничный сервис</option>
                                    <option value="Дошкольное образование">Дошкольное образование</option>
                                    <option value="Организация обслуживания в общественном питании">Организация обслуживания в общественном питании</option>
                                    <option value="Преподавание в начальных классах">Преподавание в начальных классах</option>
                                    <option value="Прикладная информатика">Прикладная информатика</option>
                                    <option value="Туризм">Туризм</option>
                                </select>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </form>
        </div>
        HTML;
    }
?>