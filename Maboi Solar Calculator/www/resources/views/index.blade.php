<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Maboi Solar Calculator System</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/style.css" rel="stylesheet" />
        
    </head>
    <body class="content_a">
        <!-- header -->
        <div class="container fixed-top">
            <div class="header_d"> <div class="tt1"> <img src="/assets/img/logo1.png" alt="logo" width="100" height="100"> </div> </div>
            <div class="header_d tt" > <h1 class="heading_f">Maboi Solar Calculation System</h1></div>
        </div>

        <!-- step1-->
       <section class="step1" id="#">
            <div class="">
                <div class="qtn"> <h4> <ol> Amount of energy consumed per day  [LOAD ESTIMATION] </ol> </h4></div>
                <div class="enclose_table">
                    <table  class="center" id="tab_logic" width="350px" border="1">
                        <thead>
                            <th class="answer_center table_dim">
                                Name of Appliance
                            </th>
                            <th class="answer_center table_dim">
                                Quality
                            </th>
                            <th class="answer_center table_dim">
                                Watt
                            </th>
                            <th class="answer_center table_dim">
                                hr/D
                            </th>
                            <th class="answer_center table_dim">
                                Wh/D
                            </th>
                        </thead>
                        <tbody id="mm">
                            <tr id="row_0">  
                                <td class="answer_center table_dim" id="col0" >
                                    <select class="answer_center" id="input_appliance" name="applience" type="text" placeholder="Choose item">
                                        <option value="volvo">Select Item....</option>
                                        <option value="lights">LED Lights</option>
                                        <option value="bulb">Economic bulbs</option>
                                        <option value="lamps">Lamps</option>
                                        <option value="charger">Mobile Charger</option>
                                        <option value="tv">LED TVs</option>
                                        <option value="tube_tv">Tube TVs</option>
                                        <option value="tube_tv">Radio</option>
                                        <option value="tube_tv">Fridge</option>
                                        <option value="tube_tv">Iron box</option>
                                        <option value="tube_tv">Others</option>
                                      </select>
                                </td>
                                <td class="answer_center table_dim" id="col1">
                                    <input id="qty" class="floating_input answer_center" name="qty" type="number" placeholder="Qty" oninput="calculate('row_0')"/>
                                </td>
                                <td class='answer_center table_dim' id="col2">
                                <input id="watt" class="floating_input answer_center" name="watt" type="number" placeholder="watt" oninput="calculate('row_0')"/>
                                </td>
                                <td class="answer_center table_dim" id="col3">
                                    <input id="hrpday" class="floating_input answer_center" name="hrpday" type="number" placeholder="h/d" oninput="calculate('row_0')"/>
                                </td>
                                <td class="answer_center table_dim" id="col4">
                                    <input class="answer_center" type=number name="watt_per_day" id="watt_per_day" readonly>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="results"> 
                    <!-- <button id="insert_loadestimation" onclick="moreFields()">ADD FIELD</button>  <br> -->
                    <div >
                        <div class="mdod_extend"> 
                            <p>
                                     <button id="add_row" onclick="addRows('mm')">Add Appliance</button>
                            </p>
                            </div>
                        <div class="mdod_extend">
                           <p>
                                    <!-- <button type="button" onclick="ernergyTotalCalculator();">Get energry(wat) per day</button>  -->
                                   Energy per day ::::: <input class="answer_center" type="number" id="energy_per_day" readonly>
                                   <!-- <span id="energy_per_day"></span> -->
                           </p> 
                        </div>
                    </div>

                </div>
            </form>
            </div>
       </section>
       <!-- step2  -->
       <!-- <section class="divider" id="#">
           <div>
                 <div class="qtn"> <h4> <ol> System Loss  </ol> </h4></div>

                <form >
                 <div class="radio_btn" id="rates">
                    <div class="input1 dist">
                            <input type="radio" id="r_10" name="percent" value="0.1">
                        <label for="r_10">10%</label>
                            <span class="checkmark"></span>
                          
                     </div>
                     <div class="input1">
                            <input type="radio" id="r_15" name="percent" value="0.15">
                        <label  for="r_15">15%</label>
                          <span class="checkmark"></span>
                          
                     </div>
                     <div class="input1">
                            <input type="radio" id="r_20" name="percent" value="0.20">
                        <label  for="r_20">20% </label>
                            <span class="checkmark"></span>
                         
                     </div>
                     <div class="input1">
                      
                            <input type="radio" id="r_30" name="percent" value="0.30">
                            <label for="r_30">30%</label>
                            <span class="checkmark"></span>
                          
                     </div>
                 </div>
                 <div class="qtn"><p></p></div>
                 <div class="results">
                      <!-- <p> Result =  <output name="total_system_loss" id="total_system_loss" for="total_system_loss_of_">  </output> [sum of Wh/D] </p>  -->
                      <!-- <button type="button" onclick="getSystemLoss();">Get total system loss</button> ::::: <input class="answer_center" type="number" id="total_system_loss" step="0.01" readonly> <br>
                </div>
            </form>
                </div>
       </section> --> 
       <!-- step 3 -->
       <section class="divider" id="#">
           <div>
            <div class="qtn"> <h4> <ol> Wheather Information </ol> </h4></div>
            <div class="labels">
                <div class="label1 inputs_region"><span>Determine Region</span></div>
                <div class="label1 inputs_region"><span>Suntime Hour</span></div>
                <div class="label1 inputs_region"><span>Days of autonomy without charging</span></div>
            </div>
            <div class="inputs" > 
                <div class="input1 inputs_region">
                    <select id="input_region" name="Region" type="text" placeholder="Choose Region" oninput="encodeRegion(this)" onchange="encodeRegion(this)">
                                    <option value="volvo">Select Region....</option>
                                    <option value="Dodoma">Dodoma</option>
                                    <option value="Mwanza">Mwanza</option>
                                    <option value="Dar">Dar es salaam</option>
                                    <option value="Mtwara">Mtwara</option>
                                    <option value="Iringa">Iringa</option>
                                    <option value="Kigoma">Kigoma</option>
                                    <option value="Kirimanjaro">Kirimanjaro</option>
                      </select>
                </div>
                <div class="input1 inputs_region">
                    <input id="suntime_hour" class="floating_input" name="suntime_hour" type="number" placeholder="Suntime hour" readonly />
                </div>
                <div class="input1 inputs_region">
                    <input id="day_of_autonomy" class="floating_input" name="day_of_autonomy" type="number" placeholder="Days of autonomy" readonly/>
                </div>
            </div>
                <!-- <div class="qtn"><p></p></div>
                <div class="results "> 
                    <button type="button" onclick="weatherInfoFinalCalculator();">Get Result</button> ::::: <input class="answer_center" type="number" id="weather_info" step="0.1" readonly> <br>
                </div> -->
           </div>
       </section>

       <section class="divider">
           <div>
            <div class="qtn"> <h4> <ol> ESTIMATION OF BATTERY BANK </ol> </h4></div>
            <!-- <div class="qtn"> <h4> <ol> Calculate E<sub>rough</sub> </ol> </h4></div> -->
            <div class="results">
                <button type="button" onclick="eroughCalculator();">Get Erough</button> ::::: <input type="number" id="erough_in" step="0.1" readonly> <br>
            </div>
            <!-- <div class="qtn"> <h4> <ol> Calculate E<sub>safe</sub> </ol> </h4></div> -->
            <div class="results"> 
                <div >
                    <div class="mdod"> <p>Maximum Depth Of Discharge:</p></div>
                    <div class="input1 mdod">
                
                        <input id="mdod" class="floating_input" name="MDOD" type="number" placeholder="MDOD of the battery"/> %
                    </div>
                </div>
                <hr>
                <div class="input_divider">
                    <button type="button" onclick="esafeCalculator();">Get Esafe</button> ::::: <input class="answer_center" type="number" id="esafe_in"  step="0.1" readonly>
                    </div>
            </div>
            <div class="qtn"> <h4> <ol> Capacity of the battery needed </ol> </h4></div>

            <div class="results"> 

                <div >
                    <div class="mdod"> <p> The voltage of the battery, V <sub>b</sub>:</p></div>
                    <div class="input1 mdod">
                
                        <input id="voltage_b" class="floating_input" name="voltage" type="number" placeholder="Voltage"/> V
                    </div>
                </div>
                <hr>
                <div class="input_divider">
                    <button type="button" onclick="capacityCalculator();">Get Capacity of the battery</button> ::::: <input class="answer_center" type="number" id="capacity_in" step="0.1" readonly>
                 </div>

                 <!-- <hr> -->
            </div>
            <div class="qtn"> <h4> <ol> Number of the battery needed </ol> </h4></div>
            <div class="results"> 

                <div >
                    <div class="mdod"> <p> The capacity of battery, C <sub>b</sub>:</p></div>
                    <div class="input1 mdod">
                        <input id="capacity_b" class="floating_input" name="cb" type="number" placeholder="Battery Capacity"/> AH
                    </div>
                </div>
                <hr>
                <div >
                    <div class="mdod"> <p> System DC voltage :</p></div>
                    <div class="input1 mdod">
                        <input id="vdc" class="floating_input" name="system_voltage" type="number" placeholder="DC voltage(volts)"/> V
                    </div>
                </div>
                <hr>
                <div class="input_divider">
                    <button type="button" onclick="batteryNumberCalculator();">Get Number of the battery</button> ::::: <input class="answer_center" type="number" id="numberb_in" step="0.1" readonly>
                    <hr>
                    <div >
                        <div class="mdod"> 
                            <p>
                                Series Battery <br>
                                <input class="answer_center" type="number" id="numberb_in_series" readonly>
                            </p>
                            </div>
                        <div class="mdod">
                           <p>
                               Parallel Battery  <br>
                            <input class="answer_center" type="number" id="numberb_in_parallel" readonly>
                           </p> 
                        </div>
                    </div>

                 </div>
            </div>

           </div>
       </section>
<!-- End -->
<!-- Estimation for Number of Pannels -->
       <section class="divider"> 
           <div>
            <div class="qtn"> <h4> <ol> ESTIMATION OF NUMBER OF PANELS , CONTROLLERS  & INVERTER </ol> </h4></div>
            <div class="results">
                <div>
                    <div class="input1 estimation_panel">
                       System DC Voltage,V<sub>DC</sub> :<input id="System_dc_voltage" class="floating_input" name="System_dc_voltage" type="number" placeholder="12/24"/>
                    </div>
                    <div class="input1 estimation_panel">
                        Rated Current of Module,I<sub>r</sub> :<input id="rated_current" class="floating_input" name="rated_current" type="number" placeholder="Amperes"/>
                     </div>
                     <div class="input1 estimation_panel">
                        Rated Voltage of a Module,V<sub>r</sub> :<input id="rated_voltage" class="floating_input" name="rated_voltage" type="number" placeholder="volt"/>
                     </div>
                     <div class="input1 estimation_panel">
                        Identify I<sub>sc</sub> of Panel:<input id="i_panel" class="floating_input" name="i_panel" type="number" placeholder="Amperes"/>
                     </div>
                     <div class="input1 estimation_panel">
                        Identify Size of Controller:<input id="size_controller" class="floating_input" name="size_controller" type="number" placeholder="Amperes"/>
                     </div>
                </div>
                <hr>
                <div>
                    <button type="button" onclick="getFinalEstimation();">Get Results</button> 
                </div>
                <hr>
                <div>
                    <div class="mdod_extend"> 
                        <p>
                          For Series Module = <input class="answer_center" type="number" id="series_module" readonly>
                        </p>
                        </div>
                    <div class="mdod_extend">
                       <p>
                        For Parallel Module = <input class="answer_center" type="number" id="parallel_module" readonly>
                       </p> 
                    </div>
                </div>
            </div>
            <div class="qtn">
                <div class="inputs inputs_"> GENERAL REQUIREMENT SUMMARY</div>
                <div class="last_part">
                    TOTAL NUMBER OF PANEL <br> <br> <input class="answer_center" type="number" id="total_pannel" readonly>
                </div>
                <div class="last_part">
                    NUMBER OF CONTROLLERS <br> <br> <input class="answer_center" type="number" id="controllers_number" readonly>
                </div>
                <div class="last_part">
                    INVERTER SIZE <br> <br> <input class="answer_center" type="number" id="inverter_size" readonly> Watt
                </div>
                <div class="last_part">
                    BATTERY  <br> <br><input class="answer_center" type="number" id="number_battery" readonly>
                </div>
            </div>
           </div>
       </section>
<!-- End -->
<!-- Last footer -->
<section class="divider">

</section>


<!-- Javascript -->
       <script>

        function getInputValue(){
            // Selecting the input element and get its value 
            var inputVal = document.getElementById("watt_per_day").value;
            
            // Displaying the value
            // alert(inputVal);
            // write the value
            document.getElementById('energy_per_day').value = inputVal;
        }


        // fuction to calculate system loss
        // var rates = document.getElementById('rates').value;
        var system_loss;
        function getSystemLoss(){
            var input_energy = document.getElementById("energy_per_day").value;
            if(document.getElementById('r_10').checked){
                rate_value = document.getElementById('r_10').value;
                system_loss = (rate_value * input_energy);
                system_loss += parseInt(input_energy);
                document.getElementById('total_system_loss').value = system_loss;
            }
            if(document.getElementById('r_15').checked){
                rate_value = document.getElementById('r_15').value;
                system_loss =  (rate_value * input_energy);
                system_loss += parseInt(input_energy);

                document.getElementById('total_system_loss').value = system_loss;
            }
            if(document.getElementById('r_20').checked){
                rate_value = document.getElementById('r_20').value;
                system_loss = (rate_value * input_energy);
                system_loss += parseInt(input_energy);

                document.getElementById('total_system_loss').value = system_loss;
            }
            if(document.getElementById('r_30').checked){
                rate_value = document.getElementById('r_30').value;
                system_loss = (rate_value * input_energy);
                system_loss += parseInt(input_energy);

                document.getElementById('total_system_loss').value = system_loss;
            }

        }

        //function for autofilling weather info
        function encodeRegion(selectObject){
            // var region_name = document.getElementById('input_region').value;
            var region_name = (selectObject.value || selectObject.options[selectObject.selectedIndex].value);
            // alert(region_name);
            if (region_name == 'Dodoma'){
                 document.getElementById('suntime_hour').value = 5.7;
                 document.getElementById('day_of_autonomy').value = 2;
             }
             if (region_name == 'Mwanza'){
                 document.getElementById('suntime_hour').value = 4.5;
                 document.getElementById('day_of_autonomy').value = 2.5;
             }
             if(region_name == 'Dar'){
                 document.getElementById('suntime_hour').value = 4.3;
                 document.getElementById('day_of_autonomy').value = 2;
             }
             if(region_name == 'Mtwara'){
                 document.getElementById('suntime_hour').value = 5.1;
                 document.getElementById('day_of_autonomy').value = 2.5;
             }
             if(region_name == 'Iringa'){
                 document.getElementById('suntime_hour').value = 4.2;
                 document.getElementById('day_of_autonomy').value = 3;
             }
             if(region_name == 'Kigoma'){
                 document.getElementById('suntime_hour').value = 4;
                 document.getElementById('day_of_autonomy').value = 2;
             }
             if(region_name == 'Kirimanjaro'){
                 document.getElementById('suntime_hour').value = 3.7;
                 document.getElementById('day_of_autonomy').value = 3;
             }
        }

        // function to calculate final weather info
        function weatherInfoFinalCalculator(){
            var system_loss = document.getElementById('total_system_loss').value;
            var suntime_hour = document.getElementById('suntime_hour').value;
            var weather_info;
                weather_info = system_loss / suntime_hour;

                document.getElementById('weather_info').value = Math.round(weather_info);
        }

        // function to calculate the Erough
        function eroughCalculator(){
            // ernergy use * No autonomy
            var number_autonomy = document.getElementById('day_of_autonomy').value;
            var ernergy_use = document.getElementById('energy_per_day').value;
            var erough;
            erough = ernergy_use * number_autonomy;
            document.getElementById('erough_in').value = Math.round(erough);
        }    
        
        // function to calculate the Esafe
        function esafeCalculator(){
            // erough / MDOD
            var mdod = document.getElementById('mdod').value;
            var erough = document.getElementById('erough_in').value
            var esafe;
            esafe = erough / (mdod/100);
            document.getElementById('esafe_in').value = Math.round(esafe);
        }   

        // function to calculate the capacity
        function capacityCalculator(){
            var esafe = document.getElementById('esafe_in').value;
            var voltage = document.getElementById('voltage_b').value;
            var capacity;
            capacity = esafe / voltage;
            document.getElementById('capacity_in').value = Math.round(capacity); 
        }
        // function to calculate the number of battery
        function batteryNumberCalculator(){
            var capacity = document.getElementById('capacity_in').value;
            var cb = document.getElementById('capacity_b').value;
            var number_battery;
            number_battery = capacity / cb;
            document.getElementById('numberb_in').value = Math.ceil(number_battery); 
            var number_series;
            var number_parallel;
            var vdc = document.getElementById('vdc').value;
            var voltage = document.getElementById('voltage_b').value;
            number_series = vdc / voltage;

            document.getElementById('numberb_in_series').value = Math.ceil(number_series); 

            number_parallel = number_battery /number_series;

            document.getElementById('numberb_in_parallel').value = Math.ceil(number_parallel); 
        }
        // function to calculate pannel,controller and inverter
        function getFinalEstimation(){
            var energy_required;
            var total_energy = document.getElementById('energy_per_day').value;
            // eop = 0.8
             energy_required = parseFloat(total_energy) / 0.8;

            var peak_power;
            var peak_sunhour_per_day = document.getElementById('suntime_hour').value; 

            peak_power = parseFloat(energy_required) / parseFloat(peak_sunhour_per_day);

            var system_v = document.getElementById('System_dc_voltage').value;
            var total_current;
            total_current = parseFloat(peak_power) / parseFloat(system_v);

            var rated_current = document.getElementById('rated_current').value;
            var np ;
            np = parseFloat(total_current) / parseFloat(rated_current);
            document.getElementById('parallel_module').value =  Math.ceil(np);
            
            var ns;
            var rated_voltage = document.getElementById('rated_voltage').value;
            ns = parseFloat(system_v) / parseFloat(rated_voltage);
            // document.getElementById('series_module').value = Math.ceil(ns);
            document.getElementById('series_module').value = Math.ceil(ns);


            var total_panel;
            var npm = document.getElementById('parallel_module').value;
            var nsm = document.getElementById('series_module').value;

            // total_panel = parseInt(ns)  * parseInt(np);
            total_panel = parseInt(nsm)  * parseInt(npm);

            document.getElementById('total_pannel').value =  Math.round(total_panel);
            
            var number_controller;
            var ic;
            var i_pannel = document.getElementById('i_panel').value;
            var size_controller = document.getElementById('size_controller').value;
            ic = parseInt(i_pannel) * parseInt(npm)*1.25;
            number_controller = parseFloat(ic) / parseFloat(size_controller);

            document.getElementById('controllers_number').value =  Math.ceil(number_controller);


            //get total watt
            var table = document.getElementById('mm');
            var tbl = table.querySelectorAll('input[name="watt"]');
            var total_watt = 0;
            // loop for summation
                for (var i =0; i < tbl.length; i++){
                    total_watt += Number(tbl[i].value);
                 }

            var total_load;
             total_load = parseInt(total_watt) * 1.2;
             document.getElementById('inverter_size').value = Math.round(total_load);

             var number_b = document.getElementById('numberb_in').value;
             document.getElementById('number_battery').value = Math.round(number_b);

        }

        // function to calculate energy
        // function energyCalculator(selectObject){
        //     var input = (selectObject.value || selectObject.options[selectObject.selectedIndex].value);

        //     var input_qty = document.getElementById('input_qty').value;
        //     var input_watt = document.getElementById('input_watt').value;
        //     var input_hrpday = document.getElementById('input_hrpday').value;
        //     var whd;
        //     whd = input_qty * input_watt * input_hrpday;
        //     document.getElementById('watt_per_day').value = whd;
        // }

        // function to add item rows
            function addRows(tableID) {
                        var table = document.getElementById(tableID);
                        var rowCount = table.rows.length;
                        if (rowCount < 100) { // limit the user from creating fields more than your limits
                            var row = table.insertRow(rowCount);

                            var colCount = table.rows[0].cells.length;
                            row.id = 'row_'+rowCount;
                            for (var i = 0; i < colCount; i++) {
                                var newcell = row.insertCell(i);
                                newcell.outerHTML = table.rows[0].cells[i].outerHTML;            
                            }
                        var listitems= row.querySelectorAll("input, select");
                        
                                for (i=0; i<listitems.length; i++) {
                                listitems[i].setAttribute("oninput", "calculate('"+row.id+"')");
                                }
                            
                        } else {
                            alert("Maximum items is 100.");

                        } }
                        
            function calculate(selectObject) {
                var mainRow = document.getElementById(selectObject);
                var myBox1 = mainRow.querySelectorAll('[name=qty]')[0].value;
                var myBox3 = mainRow.querySelectorAll('[name=watt]')[0].value;
                var myBox4 = mainRow.querySelectorAll('[name=hrpday]')[0].value;
                var product = mainRow.querySelectorAll('[name=watt_per_day]')[0];
                var myResult1 = myBox1 * myBox3 * myBox4;
                product.value = myResult1;

            // sum energy per day 
                var sum = 0;
                var table = document.getElementById('mm');
                let tbl = table.querySelectorAll("input[name='watt_per_day']");

                var rowLength = table.rows.length;
                var sumVal = 0;
                
                for (var i =0; i < tbl.length; i++){
                    sumVal += Number(tbl[i].value);
                    // alert(sumVal);
                 }
                
                document.getElementById("energy_per_day").value =  sumVal;
            }
            
         //fuction to add field
         var counter = 0;

        function moreFields() {
            counter++;
            var newFields = document.getElementById('load_estimation').cloneNode(true);
            newFields.id = '';
            newFields.style.display = 'block';
            var newField = newFields.childNodes;
            for (var i=0;i<newField.length;i++) {
                var theName = newField[i].name
                if (theName)
                    newField[i].name = theName + counter;
            }
            var insertHere = document.getElementById('load_estimation');
            insertHere.parentNode.insertBefore(newFields,insertHere);
        }
    </script>
    </body>
</html>