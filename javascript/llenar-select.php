<script type="text/javascript" src="jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {

                $("#numeros").change(function () {
                    $.ajax({
                        url: "procesar.php",
                        type: "POST",
                        data: "pais=" + $("#numeros").val(),
                        success: function (listaes) {
                            $("#lista").html(listaes);
                        }
                    })
                });
            });
        </script>
        <select name="numeros" id="numeros">
            <option value='0'>Elige</option>
            <option value='1'>1</option>
            <option value='2'>2</option>

        </select>
        <select id="lista">
            <option value="0">Elige</option>
        </select>