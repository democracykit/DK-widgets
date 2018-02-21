<?php

if ($_GET[type][0] != "") {

    $arr = $_GET;

    $myType;

    foreach ($arr as $row => $value) {

        foreach ($value as $row2 => $value2)

            $myType .= $value2 . "|";

    }

    $myType = rtrim($myType, "|");

    $myType = explode('|', $myType);

}

?>

<link href="/directory/cdn/assets/bootstrap/css/bootstrap-select.min.css" rel="stylesheet">

<div class="module">

    <h3>Search Properties</h3>

    <form class="form website-search" action="/properties" method="get">

        <div class="form-group normal-autosuggest">

            <input type="text" class="form-control normal-autosuggest-input property_search" id="keyword" placeholder="Search by Keyword" name="q"

                   value="<?php echo $_GET['q']; ?>">

        </div>

        <div class="form-group">

            <input type="text" class="form-control  googleSuggest googleLocation" id="location_google_maps_homepage"

                   placeholder="City or Postal Code" name="location_value"

                   value='<?php echo $_GET["location_value"]; ?>'>

        </div>

        <div class="form-group">

            <select name="property_status" id="property_status" class="selectpicker">

                <option value="" <?php if ($_GET['property_status'] == "") {

                    echo 'selected="selected"';

                }?>>All Project Types

                </option>

                <option value="Single Family Residential" <?php if ($_GET['property_status'] == "Single Family Residential") {

                    echo 'selected="selected"';

                }?>>Single Family Residential

                </option>

                <option value="Multi Family Residential" <?php if ($_GET['property_status'] == "Multi Family Residential") {

                    echo 'selected="selected"';

                }?>>Multi Family Residential

                </option>

                <option value="Commercial" <?php if ($_GET['property_status'] == "Commercial") {

                    echo 'selected="selected"';

                }?>>Commercial

                </option>

                <option value="Institutional" <?php if ($_GET['property_status'] == "Institutional") {

                    echo 'selected="selected"';

                }?>>Institutional

                </option>

                <option value="Renovation" <?php if ($_GET['property_status'] == "Renovation") {

                    echo 'selected="selected"';

                }?>>Renovation

                    </option>

                <option value="Small Build - under 15K SQ feet" <?php if ($_GET['property_status'] == "Small Build - under 15K SQ feet") {

                    echo 'selected="selected"';

                }?>>Small Build - under 15K SQ feet







            </select>

        </div>

        <div class="form-group nobmargin">

            <button type="submit" class="btn btn_home_search btn-block btn-lg">Search Now</button>

        </div>

    </form>

</div>
