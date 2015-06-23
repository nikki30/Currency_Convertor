<?php
if (isset($_POST['submitted']))
{
  include('mysql-connect.php');
  $curr= $_POST['curr'];
}  
$file = 'latest.json';
$appId = '3af838236fe346c79ca01e62c5991caa';
$ch = curl_init("http://openexchangerates.org/api/{$file}?app_id={$appId}");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// Get the data:
$json = curl_exec($ch);
curl_close($ch);
// Decode JSON response:
$exchangeRates = json_decode($json);
// You can now access the rates inside the parsed object, like so:
printf(
    "1 %s in {$curr}: %s (as of %s)<br />",
    $exchangeRates->base,
    $exchangeRates->rates->{$curr},
    date('H:i jS F, Y', $exchangeRates->timestamp)
);
$exRate=$exchangeRates->rates->{$curr};
$timeRate=date('H:i jS F, Y', $exchangeRates->timestamp);
$sqlinsert= "INSERT INTO mysite (curr_name,curr_rate,curr_time) VALUES ('$curr','$exRate','$timeRate')";
 
    if(!mysqli_query($conn,$sqlinsert))
    {
      die('error in inserting');
    }
    else
    echo "1 record added to DB";
    
?>
<html>
<head>
  <title>
    Inserting data in db
  </title>
</head>
  <body>
    <h2>Hey there!</h2>
    <form action="insert-data.php" method="POST">
    <input type="hidden" name="submitted" value="true" />
    <fieldset>
      <legend>Welcome to the Currency Converter</legend>
      <label>First Currency:<br><select name='curr'>
                          <option value="USD" selected>United States Dollars - USD</option>
                          <option value="EUR">Euro - EUR</option>
                          <option value="GBP">United Kingdom Pounds - GBP</option>
                          <option value="CAD">Canada Dollars - CAD</option>
                          <option value="AUD">Australia Dollars - AUD</option>
                          <option value="JPY">Japan Yen - JPY</option>
                          <option value="INR">India Rupees - INR</option>
                          <option value="NZD">New Zealand Dollars - NZD</option>
                          <option value="CHF">Switzerland Francs - CHF</option>
                          <option value="ZAR">South Africa Rand - ZAR</option>
                          <option value="EUR">-- Top 85 Currencies: --</option>
                          <option value="AFN">Afghanistan Afghanis - AFN</option>
                          <option value="ALL">Albania Leke - ALL</option>
                          <option value="DZD">Algeria Dinars - DZD</option>
                          <option value="USD">America (United States) Dollars - USD</option>
                          <option value="ARS">Argentina Pesos - ARS</option>
                          <option value="AUD">Australia Dollars - AUD</option>
                          <option value="ATS">Austria Schillings - ATS*</option>
                          <option value="BSD">Bahamas Dollars - BSD</option>
                          <option value="BHD">Bahrain Dinars - BHD</option>
                          <option value="BDT">Bangladesh Taka - BDT</option>
                          <option value="BBD">Barbados Dollars - BBD</option>
                          <option value="BEF">Belgium Francs - BEF*</option>
                          <option value="BMD">Bermuda Dollars - BMD</option>
                          <option value="BRL">Brazil Reais - BRL</option>
                          <option value="BGN">Bulgaria Leva - BGN</option>
                          <option value="CAD">Canada Dollars - CAD</option>
                          <option value="XOF">CFA BCEAO Francs - XOF</option>
                          <option value="XAF">CFA BEAC Francs - XAF</option>
                          <option value="CLP">Chile Pesos - CLP</option>
                          <option value="CNY">China Yuan Renminbi - CNY</option>
                          <option value="CNY">RMB (China Yuan Renminbi) - CNY</option>
                          <option value="COP">Colombia Pesos - COP</option>
                          <option value="XPF">CFP Francs - XPF</option>
                          <option value="CRC">Costa Rica Colones - CRC</option>
                          <option value="HRK">Croatia Kuna - HRK</option>
                          <option value="CYP">Cyprus Pounds - CYP*</option>
                          <option value="CZK">Czech Republic Koruny - CZK</option>
                          <option value="DKK">Denmark Kroner - DKK</option>
                          <option value="DEM">Deutsche (Germany) Marks - DEM*</option>
                          <option value="DOP">Dominican Republic Pesos - DOP</option>
                          <option value="NLG">Dutch (Netherlands) Guilders - NLG*</option>
                          <option value="XCD">Eastern Caribbean Dollars - XCD</option>
                          <option value="EGP">Egypt Pounds - EGP</option>
                          <option value="EEK">Estonia Krooni - EEK</option>
                          <option value="EUR">Euro - EUR</option>
                          <option value="FJD">Fiji Dollars - FJD</option>
                          <option value="FIM">Finland Markkaa - FIM*</option>
                          <option value="FRF">France Francs - FRF*</option>
                          <option value="DEM">Germany Deutsche Marks - DEM*</option>
                          <option value="XAU">Gold Ounces - XAU</option>
                          <option value="GRD">Greece Drachmae - GRD*</option>
                          <option value="NLG">Holland (Netherlands) Guilders - NLG*</option>
                          <option value="HKD">Hong Kong Dollars - HKD</option>
                          <option value="HUF">Hungary Forint - HUF</option>
                          <option value="ISK">Iceland Kronur - ISK</option>
                          <option value="XDR">IMF Special Drawing Right - XDR</option>
                          <option value="INR">India Rupees - INR</option>
                          <option value="IDR">Indonesia Rupiahs - IDR</option>
                          <option value="IRR">Iran Rials - IRR</option>
                          <option value="IQD">Iraq Dinars - IQD</option>
                          <option value="IEP">Ireland Pounds - IEP*</option>
                          <option value="ILS">Israel New Shekels - ILS</option>
                          <option value="ITL">Italy Lire - ITL*</option>
                          <option value="JMD">Jamaica Dollars - JMD</option>
                          <option value="JPY">Japan Yen - JPY</option>
                          <option value="JOD">Jordan Dinars - JOD</option>
                          <option value="KES">Kenya Shillings - KES</option>
                          <option value="KRW">Korea (South) Won - KRW</option>
                          <option value="KWD">Kuwait Dinars - KWD</option>
                          <option value="LBP">Lebanon Pounds - LBP</option>
                          <option value="LUF">Luxembourg Francs - LUF*</option>
                          <option value="MYR">Malaysia Ringgits - MYR</option>
                          <option value="MTL">Malta Liri - MTL*</option>
                          <option value="MUR">Mauritius Rupees - MUR</option>
                          <option value="MXN">Mexico Pesos - MXN</option>
                          <option value="MAD">Morocco Dirhams - MAD</option>
                          <option value="NLG">Netherlands Guilders - NLG*</option>
                          <option value="NZD">New Zealand Dollars - NZD</option>
                          <option value="NOK">Norway Kroner - NOK</option>
                          <option value="OMR">Oman Rials - OMR</option>
                          <option value="PKR">Pakistan Rupees - PKR</option>
                          <option value="XPD">Palladium Ounces - XPD</option>
                          <option value="PEN">Peru Nuevos Soles - PEN</option>
                          <option value="PHP">Philippines Pesos - PHP</option>
                          <option value="XPT">Platinum Ounces - XPT</option>
                          <option value="PLN">Poland Zlotych - PLN</option>
                          <option value="PTE">Portugal Escudos - PTE*</option>
                          <option value="QAR">Qatar Riyals - QAR</option>
                          <option value="RON">Romania New Lei - RON</option>
                          <option value="ROL">Romania Lei - ROL*</option>
                          <option value="RUB">Russia Rubles - RUB</option>
                          <option value="SAR">Saudi Arabia Riyals - SAR</option>
                          <option value="XAG">Silver Ounces - XAG</option>
                          <option value="SGD">Singapore Dollars - SGD</option>
                          <option value="SKK">Slovakia Koruny - SKK*</option>
                          <option value="SIT">Slovenia Tolars - SIT*</option>
                          <option value="ZAR">South Africa Rand - ZAR</option>
                          <option value="KRW">South Korea Won - KRW</option>
                          <option value="ESP">Spain Pesetas - ESP*</option>
                          <option value="XDR">Special Drawing Rights (IMF) - XDR</option>
                          <option value="LKR">Sri Lanka Rupees - LKR</option>
                          <option value="SDG">Sudan Pounds - SDG</option>
                          <option value="SEK">Sweden Kronor - SEK</option>
                          <option value="CHF">Switzerland Francs - CHF</option>
                          <option value="TWD">Taiwan New Dollars - TWD</option>
                          <option value="THB">Thailand Baht - THB</option>
                          <option value="TTD">Trinidad and Tobago Dollars - TTD</option>
                          <option value="TND">Tunisia Dinars - TND</option>
                          <option value="TRY">Turkey Lira - TRY</option>
                          <option value="AED">United Arab Emirates Dirhams - AED</option>
                          <option value="GBP">United Kingdom Pounds - GBP</option>
                          <option value="USD">United States Dollars - USD</option>
                          <option value="VEB">Venezuela Bolivares - VEB*</option>
                          <option value="VEF">Venezuela Bolivares Fuertes - VEF</option>
                          <option value="VND">Vietnam Dong - VND</option>
                          <option value="ZMK">Zambia Kwacha - ZMK</option>
                          <option value="EUR">-- Special Units: --</option>
                          <option value="XAF">CFA BEAC Francs - XAF</option>
                          <option value="XOF">CFA BCEAO Francs - XOF</option>
                          <option value="XPF">CFP Francs - XPF</option>
                          <option value="XCD">Eastern Caribbean Dollars - XCD</option>
                          <option value="EUR">Euro - EUR</option>
                          <option value="XDR">IMF Special Drawing Rights - XDR</option>
                          <option value="XAU">-- Precious Metals: --</option>
                          <option value="XAG">Silver Ounces - XAG</option>
                          <option value="XAU">Gold Ounces - XAU</option>
                          <option value="XPT">Platinum Ounces - XPT</option>
                          <option value="XPD">Palladium Ounces - XPD</option>
                        </select>
            </label>
      
      
    </fieldset>
    <br />
    
<input type="submit" value="Add new currency" />
</form>

</body>
</html>