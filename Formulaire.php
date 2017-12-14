<!DOCTYPE html>
<html>
    <head>
        <style>
            td {border: 1px black solid;}
            #down {width: 20px; float: left;}
        </style>
        <meta charset="utf-8" />
        <title>Formulaire</title>
        <script>
            function showAndHideCheckbox() {
                var checkboxStyle = document.getElementById("checkboxTable").style;
                var imgStyle = document.getElementById("down").style;
                if (checkboxStyle.display === "none") {
                    checkboxStyle.display = "inline";
                    imgStyle.style.transform = "rotate(180deg)";
                } else {
                    checkboxStyle.display = "none";
                    imgStyle.style.transform = "rotate(360deg)";
                }
            }
            function writeInSearch() {
                var arrayCheckboxes = document.getElementsByClassName('checkboxClass');
                var stringSearch = document.getElementById('search');
                stringSearch.value = '';
                for (i = 0; i < arrayCheckboxes.length; i++) {
                    if (arrayCheckboxes[i].checked === true) {
                        stringSearch.value += arrayCheckboxes[i].id + ", ";
                    }
                }   
                stringSearch.value = getStrWhithoutLastComma(stringSearch.value);
            }
            function getStrWhithoutLastComma(text) {
                posOfLastComma = text.lastIndexOf(",");
                text = text.substring(0, posOfLastComma);
                return text;
            }
        </script>
    </head>
    <body>
        <form class="search">
            <table>
                <tr>
                    <td>
                        <label for="rechercher">Recherche : </label><input type="text" id="search" name="rechercher"/>
                    </td>
                    <td>
                        <img src="img/bas.png" alt="fleche du bas" id="down" onclick="showAndHideCheckbox();">
                    </td>
                </tr>
                <form class="checkbox">
                    <tr id="checkboxTable" >
                        <td>
                            <p>
                                <label for="miseadisposition" class="label">Mise a disposition</label><input type="checkbox" id="provison" 
                                                                                                             onclick="writeInSearch(this);" class="checkboxClass" name="miseadisposition" />
                                <label for="enattente">En attente</label><input type="checkbox" id="wait" onclick="writeInSearch(this);" 
                                                                                class="checkboxClass" name="enattente"/>
                                <label for="approved">Approuve</label><input type="checkbox" id="approved" onclick="writeInSearch(this);" 
                                                                             class="checkboxClass" name="approved"/>
                            </p>
                        </td>
                    </tr>
                </form>
            </table>
        </form>
    </body>
</html>
